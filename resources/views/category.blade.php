@extends("layouts.master")

@section('title', 'Category')

@section('content')

    <main class="main">
        <div class="main__wrapper">
        <p class="nav"> <a href="{{route('index')}}">Main</a> > <a href="{{route('catalog')}}">Catalog</a> > <a href="{{route('category', $category->code)}}" class="active-menu__item">{{$category->name}}</a> </p>
            <h6 class="section-header"  style="margin-top:20px">{{$category->name}}: we're find: {{$category->products->count()}}</h6>
            <div class="all-products">
            @foreach($category->products as $product)
                    @include('layouts.card', compact('product'))
            @endforeach
            </div>
        </div>
    </main>
@endsection