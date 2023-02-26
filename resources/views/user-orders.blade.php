@extends("layouts.master")

@section('title', 'Orders')

@section('content')

    <main class="main user-orders">
        <div class="main__wrapper">
            <p class="nav"> <a href="{{route('index')}}">Main</a> > <a href="{{route('profile')}}">Personal account</a> > <a href="{{route('user-orders')}}" class="active-menu__item">Orders</a> </p>
            <h6 class="page-header">Orders</h6>
            <section class="main__user-orders">
                <div class="order">
                    <div class="order__number">№ order: 8427369</div>
                    <div class="order__date">10.10.2021</div>
                    <div class="order__price">34 $</div>
                    <div class="order__status">paid</div>
                    <div class="order__details"><a href="#">More</a></div>
                </div>
                <div class="order">
                    <div class="order__number">№ order: 8427369</div>
                    <div class="order__date">10.10.2021</div>
                    <div class="order__price">34 $</div>
                    <div class="order__status">paid</div>
                    <div class="order__details"><a href="#">More</a></div>
                </div>
                <div class="order">
                    <div class="order__number">№ order: 8427369</div>
                    <div class="order__date">10.10.2021</div>
                    <div class="order__price">34 $</div>
                    <div class="order__status">paid</div>
                    <div class="order__details"><a href="#">More</a></div>
                </div>
            </section>
        </div>
    </main>
@endsection