import gulp from 'gulp';
import concat from 'gulp-concat';
import autoprefixer from 'gulp-autoprefixer';
import cleanCSS from 'gulp-clean-css';
import terser from 'gulp-terser';
import del from 'del';
import browserSync from 'browser-sync';
import less from 'gulp-less';
import imagemin from 'gulp-imagemin';
import size from 'gulp-size';
import sourcemaps from 'gulp-sourcemaps'
import newer from 'gulp-newer';
import babel from 'gulp-babel'

//array for files
const cssFiles = [
    './src/less/css/function.css',
    './src/less/css/main.css',
    './src/less/css/_header.css',
    './src/less/css/_footer.css',
    './src/less/css/_desktop.css',
    './src/less/css/_laptop.css',
    './src/less/css/_tablet.css',
    './src/less/css/_mobile.css',
]
const lessFiles = [
    './src/less/main.less',
    //space for yours less files
    './src/less/_header.less',
    './src/less/_footer.less',
    './src/less/_desktop.less',
    './src/less/_laptop.less',
    './src/less/_tablet.less',
    './src/less/_mobile.less'
]
const jsFiles = [
    './src/scripts/localstorage.js',
    './src/scripts/slider.js',
    './src/scripts/nav.js',
    './src/scripts/cart.js'
    //space for yours js files
]
const paths = {
    images: {
        src: 'src/img/**',
        dest: 'build/img'
    }
}


//task for styles
function styles() {
    //all files assembly
    return gulp.src(cssFiles)
        .pipe(sourcemaps.init()) //add sourcemap
        //concate files
        .pipe(concat('style.css'))
        //autoprefixer
        .pipe(autoprefixer({
            cascade: false
        }))
        //minify css
        .pipe(cleanCSS({
            level: 2,
            all: false, // sets all values to `false`
            removeDuplicateRules: true
        }))
        //output file
        .pipe(sourcemaps.write('.')) //sourcemap file
        .pipe(size()) // show file size
        .pipe(gulp.dest('./build/css'))
        .pipe(browserSync.stream());
}

//task convet less to css 
function convert() {
    return gulp.src(lessFiles)
        .pipe(sourcemaps.init()) //add sourcemap
        .pipe(less())
        .pipe(gulp.dest('./src/less/css'))
        .pipe(sourcemaps.write('.')); //sourcemap file
}

//taks for js scripts
function scripts() {
    return gulp.src(jsFiles)
        .pipe(sourcemaps.init()) //add sourcemap
        .pipe(babel({ //ES6+ to ES5
            presets: ['@babel/env']
        }))
        .pipe(concat('script.js')) //concate files
        .pipe(terser({ //minify js
            toplevel: true
        }))
        .pipe(sourcemaps.write('.')) //sourcemap file
        .pipe(size()) // show file size
        .pipe(gulp.dest('./build/js')) //output file
        .pipe(browserSync.stream());
}

//task delete files from directory
function clean() {
    return del(['dist/*', '!dist/img'])
}

//task watch
function watch() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });
    //watch css files
    gulp.watch('./src/less/**/*.less', gulp.series(convert, styles))
        //watch js files
    gulp.watch('./src/js/*.js', scripts)
        //start sync when html is changed
    gulp.watch("./*.html").on('change', browserSync.reload);
}

//compress images
function img() {
    return gulp.src(paths.images.src)
        .pipe(newer(paths.images.dest))
        .pipe(imagemin({
            progressive: true
        }))
        .pipe(size()) // show file size
        .pipe(gulp.dest(paths.images.dest))
}


const build = gulp.series(clean, gulp.parallel(styles, scripts, img), watch)

export { clean }
export { img }
export { styles }
export { scripts }
export { watch }
export { build }

gulp.task('default', build); //default task