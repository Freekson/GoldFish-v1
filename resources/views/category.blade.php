@extends("master")

@section('title', 'Category')

@section('content')

    <main class="main">
        <div class="main__wrapper">
            <h6 class="section-header" style="margin-top: 200px;">{{$category->name}}: we're find: {{$category->products->count()}}</h6>
            <p>{{$category->description}}</p>
            <div class="all-products">
            @foreach($category->products as $product)
                    @include('card', compact('product'))
            @endforeach
            </div>
        </div>
    </main>
@endsection