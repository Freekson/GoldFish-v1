@extends("layouts.master")

@section('title', 'Product')

@section('content')

    <main class="main ordering">
        <div class="main__wrapper">
        <p class="nav"> <a href="{{route('index')}}">Main</a> > <a href="{{route('catalog')}}">Catalog</a>  > <a href="{{route('product')}}" class="active-menu__item">Product</a> </p>
            <h6 class="page-header">product</h6>
            <section class="main__cart carts">
                <div class="cart__wrapper">
                    <section class="cart__section">
                        <div class="cart__item">
                            <div class="image-block">
                                <img src="/img/product-2.png" alt="not found">
                            </div>
                            <p class="name">Vampire Munchkin</p>
                            <p class="price">4$</p>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </main>
@endsection