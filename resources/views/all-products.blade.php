@extends("master")

@section('title', 'Catalog')

@section('content')

    <main class="main">
        <div class="main__wrapper">
            <h6 class="section-header" style="margin-top: 200px;">All products</h6>
            <div class="all-products">
                @foreach($products as $product)
                    @include('card', compact('product'))
                @endforeach
            </div>        
        </div>
    </main>

@endsection