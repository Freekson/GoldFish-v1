@extends("master")

@section('title', 'Catalog')

@section('content')

    <main class="main">
        <div class="main__wrapper">
            <h6 class="section-header" style="margin-top: 200px;">Catalog</h6>
            @foreach($categories as $category)
                <h3 style="margin:0;">{{$category->name;}}</h3>
                {{$category->description;}}
                <br>
                <a href="{{route('category', $category->code)}}">{{$category->name;}}</a>
                <br><br>
            @endforeach
            <br>

            <!-- <section class="main__catalog catalog" style="margin-bottom: 100px; ">
                <div class="catalog__big-block">
                    <a class="image-block" href="board_games">
                        <img src="/img/catalog_img1.png" alt="not found">
                        <div class="image-text">
                            <p>Board games</p>
                        </div>
                    </a>
                </div>
                <div class="catalog__small-block">
                    <div class="catalog__first-block">
                        <a class="image-block" href="wargames">
                            <img src="/img/catalog_img2.png" alt="not found">
                            <div class="image-text">
                                <p>Wargames</p>
                            </div>
                        </a>
                        <a class="image-block" href="magic">
                            <img src="/img/catalog_img3.png" alt="not found">
                            <div class="image-text">
                                <p>Magic:the Cathering</p>
                            </div>
                        </a>
                    </div>
                    <div class="catalog__last-block">
                        <a class="image-block" href="paints">
                            <img src="/img/catalog_img4.png" alt="not found">
                            <div class="image-text">
                                <p>Paints</p>
                            </div>
                        </a>
                        <a class="image-block">
                            <img src="/img/catalog_img5.png" alt="not found">
                            <div class="image-text">
                                <p>Whole catalog</p>
                            </div>
                        </a>
                    </div>
                </div>
            </section> -->
            
        </div>
    </main>

@endsection