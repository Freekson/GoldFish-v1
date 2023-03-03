@extends('layouts.master')
@section('content')
<main class="main personal-account">
        <div class="main__wrapper">
            <p class="nav"> <a href="{{route('index')}}">Main</a> > <a href="{{route('home')}}">Personal account</a> > <a href="{{route('home')}}" class="active-menu__item">Profile</a> </p>
            <h6 class="page-header">Personal account</h6>
            <section class="main__personal-account">
                <div class="personal-account__wrapper">
                    <aside class="personal-account__menu">
                        <ul>
                            <li><a href="{{route('home')}}" class="active-item">Profile</a></li>
                            <li><a href="{{route('user-orders')}}">Orders</a></li>
                            <li><a href="user-events">Events</a></li>
                            <li><a href="{{route('user-settings')}}">Settings</a></li>
                            @if (Auth::user()->is_admin == 1)
                                <li><a href="{{route('orders')}}">Order all</a></li>
                                <li><a href="{{route('categories.index')}}">Category</a></li>
                            @endif
                        </ul>
                    </aside>
                    <article class="personal-account__section">
                        <section class="user-information">
                            <div class="user-section">
                                <div class="user">
                                    <img src="/img/user-image-1.png" alt="">
                                    <p class="user-name">{{ Auth::user()->name }}</p>
                                    <div class="card-body">
                                        @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                        @endif
                                        {{ __('You are logged in!') }}
                                    </div>
                                </div>
                                <div class="user-status">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="17" viewBox="0 0 21 17" fill="none">
                                        <path d="M1.5 8.5L8.25 15.25L19.5 1.75" stroke="#F9A43F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <p class="status">Newbie</p></div>
                            </div>
                            <h6>Loyality card</h6>
                            <div class="loyality-section">
                                <div class="loyality-block">
                                    <div class="card">
                                        <div class="second-layer">
                                            <div class="first-layer">
                                                <div class="card-inside">
                                                    <img src="/img/logo-v2.png" alt="">
                                                    <p class="discount">-5%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="achievements">
                                        <div class="achievements__item">         
                                            <div class="achievements__section">
                                                <div class="achievements__img">
                                                    <img src="/img/bronze-achievement.png" alt="">
                                                </div>
                                                <div class="achievements__text">
                                                    <p class="title">5% "Newbie"</p>
                                                    <p class="status">Received</p>
                                                </div>
                                            </div>
                                            <p class="achievements__score">1000</p>
                                        </div>
                                        <div class="achievements__item closed">
                                            <div class="achievements__section">
                                                <div class="achievements__img">
                                                    <img src="/img/silver-achievement.png" alt="">
                                                </div>
                                                <div class="achievements__text">
                                                    <p class="title">10% "Amateur"</p>
                                                    <p class="status">Closed</p>
                                                </div>
                                            </div>
                                            <p class="achievements__score">5000</p>
                                        </div>
                                        <div class="achievements__item closed">
                                            <div class="achievements__section">
                                                <div class="achievements__img">
                                                    <img src="/img/gold-achievement.png" alt="">
                                                </div>
                                                <div class="achievements__text">
                                                    <p class="title">15% "Professional"</p>
                                                    <p class="status">Closed</p>
                                                </div>
                                            </div>
                                            <p class="achievements__score">10000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-bar">
                                <progress id="progress" value="12" max="100"> 32% </progress>
                                <label for="progress">1200/10000</label>
                            </div>
                        </section>
                        <section class="user-events">
                            <h6>My events</h6>
                            <div class="user-events__item">
                                <div class="user-events__description">
                                    <img src="/img/event-1.png" alt="event-img">
                                    <div class="user-events__info">
                                        <p class="name">Dungeons Dragons games</p>
                                        <p class="date">September 25, 2023, 17:00</p>
                                    </div>
                                </div>
                                <div class="user-events__more"> <a href="#">More</a></div>
                            </div>
                            <div class="user-events__item">
                                <div class="user-events__description">
                                    <img src="/img/event-2.png" alt="event-img">
                                    <div class="user-events__info">
                                        <p class="name">Board game night</p>
                                        <p class="date">October 10, 2023, 19:00</p>
                                    </div>
                                </div>
                                <div class="user-events__more"> <a href="#">More</a></div>
                            </div>
                            <div class="user-events__item">
                                <div class="user-events__description">
                                    <img src="/img/event-3.png" alt="event-img">
                                    <div class="user-events__info">
                                        <p class="name">Tournament Warhammer 40000</p>
                                        <p class="date">November 19, 2021, 17:00</p>
                                    </div>
                                </div>
                                <div class="user-events__more"> <a href="#">More</a></div>
                            </div>
                        </section>
                        <section class="user-recomended">
                            <h6>Recommended for you</h6>
                            <div class="user__items">
                            @include('layouts.card-offered')
                            </div>
                        </section>
                    </article>
                </div>
            </section>
        </div>
    </main>

@endsection
