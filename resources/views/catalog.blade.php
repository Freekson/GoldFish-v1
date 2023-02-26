@extends("layouts.master")

@section('title', 'Catalog')

@section('content')

    <main class="main">
        <div class="main__wrapper">
        <p class="nav"> <a href="{{route('index')}}">Main</a> > <a href="{{route('catalog')}}" class="active-menu__item">Catalog</a></p>
            <h6 class="section-header" style="margin-top:20px">Catalog</h6>
            @foreach($categories as $category)
                <h3 style="margin:0;">{{$category->name;}}</h3>
                {{$category->description;}}
                <br>
                <a href="{{route('category', $category->code)}}">{{$category->name;}}</a>
                <br><br>
            @endforeach
            <br>
            
        </div>
    </main>

@endsection