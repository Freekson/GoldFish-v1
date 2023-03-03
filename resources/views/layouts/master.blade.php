<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/_header.css">
    <link rel="stylesheet" href="/css/_footer.css">
    <link rel="stylesheet" href="/css/_desktop.css">
    <link rel="stylesheet" href="/css/_laptop.css">
    <link rel="stylesheet" href="/css/_tablet.css">
    <link rel="stylesheet" href="/css/_mobile.css">
    <title>@yield('title')</title>
</head>

<body>

    <header class="header">
        <div class="header__wrapper">
            <div class="header__logo-image">
                <a href="{{route('index')}}">
                    <img src="/img/logo.png" alt="not found">
                </a>
            </div>
            <div class="header__find-game">
                <input type="text" name="search" placeholder="Find game">
                <span class="header__aicon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M20 20L15.514 15.506L20 20ZM18 9.5C18 11.7543 17.1045 13.9163 15.5104 15.5104C13.9163 17.1045 11.7543 18 9.5 18C7.24566 18 5.08365 17.1045 3.48959 15.5104C1.89553 13.9163 1 11.7543 1 9.5C1 7.24566 1.89553 5.08365 3.48959 3.48959C5.08365 1.89553 7.24566 1 9.5 1C11.7543 1 13.9163 1.89553 15.5104 3.48959C17.1045 5.08365 18 7.24566 18 9.5V9.5Z" stroke="#2A2A2A" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </span>
            </div>
            <div class="header__telephone">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26" fill="none">
                    <path d="M19.25 15.875C17.5 17.5625 17.5 19.25 15.75 19.25C14 19.25 12.25 17.5625 10.5 15.875C8.75 14.1875 7 12.5 7 10.8125C7 9.125 8.75 9.125 10.5 7.4375C12.25 5.75 7 0.6875 5.25 0.6875C3.5 0.6875 0 5.75 0 5.75C0 9.125 3.59625 15.9678 7 19.25C10.4038 22.5322 17.5 26 21 26C21 26 26.25 22.625 26.25 20.9375C26.25 19.25 21 14.1875 19.25 15.875Z" fill="white"/>
                </svg>
                <p>+7 (495) 911-10-11</p>
            </div>
            <ul class="header__list list">
                <li class="list__item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="29" viewbox="0 0 30 29" fill="none">
                        <path d="M15 0.695312C12.9545 0.695312 11.3565 1.43942 10.206 2.92765C9.0554 4.41587 8.48011 6.31827 8.48011 8.63485C8.46591 11.513 9.40341 13.7945 11.2926 15.4793C11.5341 15.7039 11.6193 15.9917 11.5483 16.3427L11.0582 17.3536C10.902 17.6906 10.6712 17.9538 10.3658 18.1433C10.0604 18.3329 9.41761 18.6031 8.4375 18.9541C8.39489 18.9682 7.49645 19.256 5.74219 19.8176C3.98793 20.3792 3.05398 20.6881 2.94034 20.7442C1.74716 21.2356 0.965909 21.7481 0.596591 22.2816C0.198864 23.1661 0 25.4055 0 28.9997H30C30 25.4055 29.8011 23.1661 29.4034 22.2816C29.0341 21.7481 28.2528 21.2356 27.0597 20.7442C26.946 20.6881 26.0121 20.3792 24.2578 19.8176C22.5036 19.256 21.6051 18.9682 21.5625 18.9541C20.5824 18.6031 19.9396 18.3329 19.6342 18.1433C19.3288 17.9538 19.098 17.6906 18.9418 17.3536L18.4517 16.3427C18.3807 15.9917 18.4659 15.7039 18.7074 15.4793C20.5966 13.7945 21.5341 11.513 21.5199 8.63485C21.5199 6.31827 20.9446 4.41587 19.794 2.92765C18.6435 1.43942 17.0455 0.695312 15 0.695312Z" fill="white"/>
                    </svg>
                    <ul class="header__sublist">
                        @guest
                    @if (Route::has('login'))
                       <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @endif
                    @if (Route::has('register'))
                        <li ><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @endif
                    @else
                        <li>
                            <a id="navbarDropdown" class="nav-link" href="{{route('home')}}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li>
                            <a class="nav-link"href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                     @endguest
                    </ul>
                </li>
                <li class="list__item">
                    <a class="list__link link" href="{{route('cart')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="27" viewbox="0 0 30 27" fill="none">
                        <path d="M28.741 6.20821C28.489 5.77161 28.1282 5.40778 27.6937 5.15219C27.2592 4.89661 26.7659 4.75799 26.2618 4.74988H7.59518L6.74935 1.45405C6.66389 1.13589 6.47323 0.856047 6.20842 0.660088C5.94361 0.464128 5.62025 0.363601 5.29102 0.374879H2.37435C1.98757 0.374879 1.61664 0.528524 1.34315 0.802015C1.06966 1.07551 0.916016 1.44644 0.916016 1.83321C0.916016 2.21999 1.06966 2.59092 1.34315 2.86441C1.61664 3.1379 1.98757 3.29155 2.37435 3.29155H4.18268L8.20768 18.254C8.29314 18.5722 8.4838 18.852 8.74861 19.048C9.01342 19.244 9.33678 19.3445 9.66602 19.3332H22.791C23.0603 19.3324 23.3241 19.257 23.5532 19.1154C23.7823 18.9739 23.9677 18.7716 24.0889 18.5311L28.8723 8.96446C29.0796 8.5299 29.1761 8.05077 29.1532 7.56983C29.1303 7.08889 28.9887 6.62111 28.741 6.20821Z" fill="white"/>
                        <path d="M8.9375 26.625C10.1456 26.625 11.125 25.6456 11.125 24.4375C11.125 23.2294 10.1456 22.25 8.9375 22.25C7.72938 22.25 6.75 23.2294 6.75 24.4375C6.75 25.6456 7.72938 26.625 8.9375 26.625Z" fill="white"/>
                        <path d="M23.5195 26.625C24.7277 26.625 25.707 25.6456 25.707 24.4375C25.707 23.2294 24.7277 22.25 23.5195 22.25C22.3114 22.25 21.332 23.2294 21.332 24.4375C21.332 25.6456 22.3114 26.625 23.5195 26.625Z" fill="white"/>
                        </svg>
                        <p class="link__counter" id="cart">0</p>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <nav class="navigation" id="nav">
        <div class="navigation__wrapper">
            <div class="navigation__burger" id="open-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewbox = "0 0 16 14" fill="none">
                    <rect width="16" height="2" fill="#2A2A2A"/>
                    <rect y="6" width="16" height="2" fill="#2A2A2A"/>
                    <rect y="12" width="16" height="2" fill="#2A2A2A"/>
                </svg>
                <p>Catalog</p>
            </div>
            <div class="navigation__list">
                <ul>
                    <li>
                        <a href="#">Wharhammer</a>
                    </li>
                    <li>
                        <a href="#">Magic:the Cathering</a>
                    </li>
                    <li>
                        <a href="#">Events</a>
                    </li>
                    <li>
                        <a href="#">About the center</a>
                    </li>
                    <li>
                        <a href="#">Contacts</a>
                    </li>
                </ul>
            </div>
            <div class="navigation__social">
                <a href="#" class="inst">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                        <g clip-path="url(#clip0_2079_273)">
                        <path d="M11.4318 0.0888672C8.32951 0.0888672 7.9394 0.103157 6.72048 0.157458C5.50156 0.214617 4.67133 0.4061 3.94398 0.689038C3.18104 0.976004 2.48998 1.42614 1.91912 2.00798C1.33763 2.57914 0.887548 3.27011 0.60017 4.03284C0.317233 4.75876 0.124321 5.59043 0.0685909 6.80506C0.0142898 8.02684 0 8.41552 0 11.5221C0 14.6259 0.0142898 15.0145 0.0685909 16.2335C0.12575 17.4509 0.317233 18.2812 0.60017 19.0085C0.893111 19.7602 1.28322 20.3975 1.91912 21.0334C2.55358 21.6693 3.19091 22.0608 3.94255 22.3523C4.67133 22.6353 5.50013 22.8282 6.71762 22.8839C7.93797 22.9382 8.32665 22.9525 11.4318 22.9525C14.537 22.9525 14.9242 22.9382 16.1446 22.8839C17.3606 22.8268 18.1937 22.6353 18.9211 22.3523C19.6835 22.0652 20.3741 21.6151 20.9445 21.0334C21.5804 20.3975 21.9705 19.7602 22.2635 19.0085C22.545 18.2812 22.7379 17.4509 22.795 16.2335C22.8493 15.0145 22.8636 14.6259 22.8636 11.5207C22.8636 8.41552 22.8493 8.02684 22.795 6.80649C22.7379 5.59043 22.545 4.75876 22.2635 4.03284C21.9761 3.27009 21.526 2.57911 20.9445 2.00798C20.3738 1.42593 19.6827 0.975755 18.9197 0.689038C18.1909 0.4061 17.3592 0.213188 16.1432 0.157458C14.9228 0.103157 14.5356 0.0888672 11.429 0.0888672H11.4332H11.4318ZM10.4072 2.14945H11.4332C14.4855 2.14945 14.8471 2.15946 16.0517 2.21519C17.1663 2.2652 17.7722 2.4524 18.1752 2.60815C18.7082 2.81536 19.0897 3.064 19.4898 3.46411C19.8899 3.86423 20.1371 4.24433 20.3443 4.77877C20.5015 5.18031 20.6873 5.7862 20.7373 6.9008C20.793 8.10543 20.8045 8.46696 20.8045 11.5178C20.8045 14.5687 20.793 14.9317 20.7373 16.1363C20.6873 17.2509 20.5001 17.8553 20.3443 18.2583C20.1611 18.7547 19.8685 19.2035 19.4884 19.5715C19.0883 19.9717 18.7082 20.2189 18.1737 20.4261C17.7736 20.5833 17.1677 20.769 16.0517 20.8205C14.8471 20.8748 14.4855 20.8876 11.4332 20.8876C8.38095 20.8876 8.01799 20.8748 6.81336 20.8205C5.69876 20.769 5.0943 20.5833 4.69133 20.4261C4.19476 20.243 3.74553 19.951 3.37667 19.5715C2.99621 19.2029 2.70323 18.7537 2.51929 18.2569C2.36353 17.8553 2.17633 17.2495 2.12632 16.1349C2.07202 14.9302 2.06059 14.5687 2.06059 11.515C2.06059 8.46267 2.07202 8.10257 2.12632 6.89794C2.17776 5.78334 2.36353 5.17746 2.52072 4.77448C2.72792 4.24148 2.97656 3.85994 3.37667 3.45982C3.77679 3.05971 4.15689 2.8125 4.69133 2.6053C5.0943 2.44811 5.69876 2.26234 6.81336 2.2109C7.86795 2.16231 8.27664 2.14802 10.4072 2.14659V2.14945ZM17.535 4.04713C17.3548 4.04713 17.1764 4.08262 17.01 4.15156C16.8436 4.2205 16.6923 4.32155 16.565 4.44893C16.4376 4.57632 16.3365 4.72754 16.2676 4.89398C16.1986 5.06042 16.1632 5.2388 16.1632 5.41895C16.1632 5.5991 16.1986 5.77749 16.2676 5.94392C16.3365 6.11036 16.4376 6.26159 16.565 6.38897C16.6923 6.51636 16.8436 6.61741 17.01 6.68635C17.1764 6.75529 17.3548 6.79077 17.535 6.79077C17.8988 6.79077 18.2477 6.64624 18.505 6.38897C18.7623 6.13171 18.9068 5.78278 18.9068 5.41895C18.9068 5.05512 18.7623 4.7062 18.505 4.44893C18.2477 4.19166 17.8988 4.04713 17.535 4.04713ZM11.4332 5.65045C10.6546 5.6383 9.88123 5.78118 9.15828 6.07077C8.43534 6.36036 7.77723 6.79087 7.22227 7.33724C6.6673 7.88362 6.22657 8.53493 5.92574 9.25327C5.62491 9.97161 5.46998 10.7426 5.46998 11.5214C5.46998 12.3002 5.62491 13.0712 5.92574 13.7895C6.22657 14.5079 6.6673 15.1592 7.22227 15.7056C7.77723 16.2519 8.43534 16.6824 9.15828 16.972C9.88123 17.2616 10.6546 17.4045 11.4332 17.3924C12.9745 17.3683 14.4444 16.7392 15.5258 15.6408C16.6072 14.5424 17.2133 13.0628 17.2133 11.5214C17.2133 9.98 16.6072 8.50042 15.5258 7.40202C14.4444 6.30361 12.9745 5.67449 11.4332 5.65045ZM11.4332 7.7096C12.444 7.7096 13.4134 8.11113 14.1281 8.82584C14.8428 9.54056 15.2443 10.5099 15.2443 11.5207C15.2443 12.5314 14.8428 13.5008 14.1281 14.2155C13.4134 14.9302 12.444 15.3318 11.4332 15.3318C10.4225 15.3318 9.45312 14.9302 8.7384 14.2155C8.02369 13.5008 7.62216 12.5314 7.62216 11.5207C7.62216 10.5099 8.02369 9.54056 8.7384 8.82584C9.45312 8.11113 10.4225 7.7096 11.4332 7.7096Z" fill="#F9A43F"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_2079_273">
                        <rect width="22.8636" height="22.8636" fill="white" transform="translate(0 0.0888672)"/>
                        </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="#" class="vk">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <path d="M19.6038 9.1421C19.6976 8.84265 19.6038 8.62305 19.1607 8.62305H17.6928C17.3192 8.62305 17.1486 8.81302 17.0548 9.02168C17.0548 9.02168 16.3085 10.7727 15.2509 11.908C14.9095 12.2384 14.7535 12.3427 14.5674 12.3427C14.4744 12.3427 14.3392 12.2384 14.3392 11.9389V9.1421C14.3392 8.78276 14.2314 8.62305 13.9201 8.62305H11.6134C11.3805 8.62305 11.2399 8.7892 11.2399 8.94762C11.2399 9.28764 11.7687 9.36621 11.823 10.3245V12.4033C11.823 12.8586 11.738 12.9416 11.5505 12.9416C11.0532 12.9416 9.84294 11.1842 9.12469 9.17237C8.98479 8.78147 8.84355 8.62369 8.4687 8.62369H7.00142C6.58172 8.62369 6.49805 8.81367 6.49805 9.02232C6.49805 9.39712 6.9954 11.2518 8.81477 13.7048C10.0277 15.3798 11.7353 16.2878 13.2909 16.2878C14.2234 16.2878 14.3385 16.0862 14.3385 15.7385V14.4724C14.3385 14.0693 14.4275 13.9881 14.7227 13.9881C14.9396 13.9881 15.3131 14.0937 16.184 14.9007C17.1787 15.8576 17.3433 16.2872 17.9023 16.2872H19.3696C19.7886 16.2872 19.9981 16.0856 19.8776 15.6876C19.7457 15.2916 19.2705 14.7152 18.6399 14.0332C18.2972 13.6442 17.7851 13.2256 17.6292 13.0163C17.4116 12.7465 17.4745 12.6274 17.6292 12.3878C17.6298 12.3885 19.4178 9.96576 19.6038 9.1421Z" fill="#F9A43F"/>
                        <rect x="2.83789" y="2.08887" width="20.8636" height="20.8636" rx="6" stroke="#F9A43F" stroke-width="2"/>
                    </svg>
                </a>
                <a href="#" class="fb">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="23" viewBox="0 0 24 23" fill="none">
                        <path d="M12.4341 9.45168V8.21051C12.4341 7.67267 12.5582 7.38307 13.427 7.38307H14.5027V5.31445H12.8478C10.7792 5.31445 9.95177 6.67974 9.95177 8.21051V9.45168H8.29688V11.5203H9.95177V17.7261H12.4341V11.5203H14.2545L14.5027 9.45168H12.4341Z" fill="#F9A43F"/>
                        <rect x="1.58984" y="1.08887" width="20.8636" height="20.8636" rx="6" stroke="#F9A43F" stroke-width="2"/>
                    </svg>
                </a>
            </div>
        </div>
    </nav>
    <nav class="open-navigation" id="open-nav">
        <div class="navigation__wrapper">
            <div class="category-list">
                <div class="all-category" id="close-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                        <path d="M1.64016 0.27L6.50016 5.13L11.3402 0.29C11.425 0.199717 11.5272 0.127495 11.6406 0.0776621C11.754 0.0278297 11.8763 0.00141434 12.0002 0C12.2654 0 12.5197 0.105357 12.7073 0.292893C12.8948 0.48043 13.0002 0.734784 13.0002 1C13.0025 1.1226 12.9797 1.24439 12.9333 1.35788C12.8869 1.47138 12.8178 1.57419 12.7302 1.66L7.84016 6.5L12.7302 11.39C12.895 11.5512 12.9916 11.7696 13.0002 12C13.0002 12.2652 12.8948 12.5196 12.7073 12.7071C12.5197 12.8946 12.2654 13 12.0002 13C11.8727 13.0053 11.7456 12.984 11.6268 12.9375C11.508 12.8911 11.4002 12.8204 11.3102 12.73L6.50016 7.87L1.65016 12.72C1.56567 12.8073 1.46473 12.8769 1.35316 12.925C1.2416 12.9731 1.12163 12.9986 1.00016 13C0.734946 13 0.480592 12.8946 0.293056 12.7071C0.10552 12.5196 0.000162706 12.2652 0.000162706 12C-0.00216879 11.8774 0.0205782 11.7556 0.0670078 11.6421C0.113437 11.5286 0.18257 11.4258 0.270163 11.34L5.16016 6.5L0.270163 1.61C0.105348 1.44876 0.00870232 1.23041 0.000162706 1C0.000162706 0.734784 0.10552 0.48043 0.293056 0.292893C0.480592 0.105357 0.734946 0 1.00016 0C1.24016 0.003 1.47016 0.1 1.64016 0.27Z" fill="#2A2A2A"/>
                        </svg>
                    <p>All category</p>
                </div>
                <ul>
                    <li id="item-1">
                        <p>Board games</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                            <path d="M0 12L5 7L0 2L1 0L8 7L1 14L0 12Z" fill="#2A2A2A"/>
                        </svg>
                    </li>
                    <li id="item-2">
                        <p>War&shy;ham&shy;mer 40000</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                            <path d="M0 12L5 7L0 2L1 0L8 7L1 14L0 12Z" fill="#2A2A2A"/>
                        </svg>
                    </li>
                    <li id="item-3">
                        <p>Magic: the Ga&shy;the&shy;ring</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                            <path d="M0 12L5 7L0 2L1 0L8 7L1 14L0 12Z" fill="#2A2A2A"/>
                        </svg>
                    </li>
                    <li id="item-4">
                        <p>Game acce&shy;sso&shy;ries</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                            <path d="M0 12L5 7L0 2L1 0L8 7L1 14L0 12Z" fill="#2A2A2A"/>
                        </svg>
                    </li>
                    <li id="item-5">
                        <p>Paints</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                            <path d="M0 12L5 7L0 2L1 0L8 7L1 14L0 12Z" fill="#2A2A2A"/>
                        </svg>
                    </li>
                    <li id="item-6">
                        <p>Goods for chil&shy;dren</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                            <path d="M0 12L5 7L0 2L1 0L8 7L1 14L0 12Z" fill="#2A2A2A"/>
                        </svg>
                    </li>
                    <li>
                        <a href="{{route('all-products')}}" style="text-decoration: none; color:black;">All products</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                            <path d="M0 12L5 7L0 2L1 0L8 7L1 14L0 12Z" fill="#2A2A2A"/>
                        </svg>
                    </li>
                </ul>
            </div>

            <div class="aside-content" id="content">

            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="footer">
        <div class="footer__wrapper">
            <div class="footer__top">
                <div class="section__column">
                    <a href="#"><img src="/img/logo.png" alt="not found"></a>
                    <p>Moscow, metro station Taganskaya <br> Maly Drovyanoy Lane 6</p>
                </div>
                <div class="section__column">
                    <a href="#" class="bold">Catalog</a>
                    <a href="#">Warhammer 40000</a>
                    <a href="#">Board games</a>
                    <a href="#">Magic: the Gathering</a>
                    <a href="#">Game accessories</a>
                    <a href="#">Paints</a>
                    <a href="#">Modeling accessories</a>
                </div>
                <div class="section__column">
                    <a href="#" class="bold">Club rules</a>
                    <a href="#" class="bold">Events</a>
                    <a href="#" class="bold">About us</a>
                    <a href="#" class="bold">Contacts Blog</a>
                </div>
                <div class="section__column">
                    <a href="#" class="bold">Payment and delivery</a>
                    <a href="#" class="bold">Warranty and returns</a>
                </div>
                <div class="section__column">
                    <div class="request-btn">
                        <a href="#">Request a call</a>
                    </div>
                    <p class="first-item">+7 (495) 911-10-11</p>
                    <p>msk@magicgoldfish.ua</p>
                    <div class="social-block">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                                <path d="M11.4318 0.0888672C8.32951 0.0888672 7.9394 0.103157 6.72048 0.157458C5.50156 0.214617 4.67133 0.4061 3.94398 0.689038C3.18104 0.976004 2.48998 1.42614 1.91912 2.00798C1.33763 2.57914 0.887548 3.27011 0.60017 4.03284C0.317233 4.75876 0.124321 5.59043 0.0685909 6.80506C0.0142898 8.02684 0 8.41552 0 11.5221C0 14.6259 0.0142898 15.0145 0.0685909 16.2335C0.12575 17.4509 0.317233 18.2812 0.60017 19.0085C0.893111 19.7602 1.28322 20.3975 1.91912 21.0334C2.55358 21.6693 3.19091 22.0608 3.94255 22.3523C4.67133 22.6353 5.50013 22.8282 6.71762 22.8839C7.93797 22.9382 8.32665 22.9525 11.4318 22.9525C14.537 22.9525 14.9242 22.9382 16.1446 22.8839C17.3606 22.8268 18.1937 22.6353 18.9211 22.3523C19.6835 22.0652 20.3741 21.6151 20.9445 21.0334C21.5804 20.3975 21.9705 19.7602 22.2635 19.0085C22.545 18.2812 22.7379 17.4509 22.795 16.2335C22.8493 15.0145 22.8636 14.6259 22.8636 11.5207C22.8636 8.41552 22.8493 8.02684 22.795 6.80649C22.7379 5.59043 22.545 4.75876 22.2635 4.03284C21.9761 3.27009 21.526 2.57911 20.9445 2.00798C20.3738 1.42593 19.6827 0.975755 18.9197 0.689038C18.1909 0.4061 17.3592 0.213188 16.1432 0.157458C14.9228 0.103157 14.5356 0.0888672 11.429 0.0888672H11.4332H11.4318ZM10.4072 2.14945H11.4332C14.4855 2.14945 14.8471 2.15946 16.0517 2.21519C17.1663 2.2652 17.7722 2.4524 18.1752 2.60815C18.7082 2.81536 19.0897 3.064 19.4898 3.46411C19.8899 3.86423 20.1371 4.24433 20.3443 4.77877C20.5015 5.18031 20.6873 5.7862 20.7373 6.9008C20.793 8.10543 20.8045 8.46696 20.8045 11.5178C20.8045 14.5687 20.793 14.9317 20.7373 16.1363C20.6873 17.2509 20.5001 17.8553 20.3443 18.2583C20.1611 18.7547 19.8685 19.2035 19.4884 19.5715C19.0883 19.9717 18.7082 20.2189 18.1737 20.4261C17.7736 20.5833 17.1677 20.769 16.0517 20.8205C14.8471 20.8748 14.4855 20.8876 11.4332 20.8876C8.38095 20.8876 8.01799 20.8748 6.81336 20.8205C5.69876 20.769 5.0943 20.5833 4.69133 20.4261C4.19476 20.243 3.74553 19.951 3.37667 19.5715C2.99621 19.2029 2.70323 18.7537 2.51929 18.2569C2.36353 17.8553 2.17633 17.2495 2.12632 16.1349C2.07202 14.9302 2.06059 14.5687 2.06059 11.515C2.06059 8.46267 2.07202 8.10257 2.12632 6.89794C2.17776 5.78334 2.36353 5.17746 2.52072 4.77448C2.72792 4.24148 2.97656 3.85994 3.37667 3.45982C3.77679 3.05971 4.15689 2.8125 4.69133 2.6053C5.0943 2.44811 5.69876 2.26234 6.81336 2.2109C7.86795 2.16231 8.27664 2.14802 10.4072 2.14659V2.14945ZM17.535 4.04713C17.3548 4.04713 17.1764 4.08262 17.01 4.15156C16.8436 4.2205 16.6923 4.32155 16.565 4.44893C16.4376 4.57632 16.3365 4.72754 16.2676 4.89398C16.1986 5.06042 16.1632 5.2388 16.1632 5.41895C16.1632 5.5991 16.1986 5.77749 16.2676 5.94392C16.3365 6.11036 16.4376 6.26159 16.565 6.38897C16.6923 6.51636 16.8436 6.61741 17.01 6.68635C17.1764 6.75529 17.3548 6.79077 17.535 6.79077C17.8988 6.79077 18.2477 6.64624 18.505 6.38897C18.7623 6.13171 18.9068 5.78278 18.9068 5.41895C18.9068 5.05512 18.7623 4.7062 18.505 4.44893C18.2477 4.19166 17.8988 4.04713 17.535 4.04713ZM11.4332 5.65045C10.6546 5.6383 9.88123 5.78118 9.15828 6.07077C8.43534 6.36036 7.77723 6.79087 7.22227 7.33724C6.6673 7.88362 6.22657 8.53493 5.92574 9.25327C5.62491 9.97161 5.46998 10.7426 5.46998 11.5214C5.46998 12.3002 5.62491 13.0712 5.92574 13.7895C6.22657 14.5079 6.6673 15.1592 7.22227 15.7056C7.77723 16.2519 8.43534 16.6824 9.15828 16.972C9.88123 17.2616 10.6546 17.4045 11.4332 17.3924C12.9745 17.3683 14.4444 16.7392 15.5258 15.6408C16.6072 14.5424 17.2133 13.0628 17.2133 11.5214C17.2133 9.98 16.6072 8.50042 15.5258 7.40202C14.4444 6.30361 12.9745 5.67449 11.4332 5.65045ZM11.4332 7.7096C12.444 7.7096 13.4134 8.11113 14.1281 8.82584C14.8428 9.54056 15.2443 10.5099 15.2443 11.5207C15.2443 12.5314 14.8428 13.5008 14.1281 14.2155C13.4134 14.9302 12.444 15.3318 11.4332 15.3318C10.4225 15.3318 9.45312 14.9302 8.7384 14.2155C8.02369 13.5008 7.62216 12.5314 7.62216 11.5207C7.62216 10.5099 8.02369 9.54056 8.7384 8.82584C9.45312 8.11113 10.4225 7.7096 11.4332 7.7096Z" fill="#F9A43F"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M19.6053 9.1421C19.699 8.84265 19.6053 8.62305 19.1622 8.62305H17.6942C17.3207 8.62305 17.15 8.81302 17.0563 9.02168C17.0563 9.02168 16.3099 10.7727 15.2523 11.908C14.9109 12.2384 14.755 12.3427 14.5689 12.3427C14.4758 12.3427 14.3406 12.2384 14.3406 11.9389V9.1421C14.3406 8.78276 14.2329 8.62305 13.9216 8.62305H11.6149C11.382 8.62305 11.2414 8.7892 11.2414 8.94762C11.2414 9.28764 11.7702 9.36621 11.8244 10.3245V12.4033C11.8244 12.8586 11.7394 12.9416 11.552 12.9416C11.0546 12.9416 9.8444 11.1842 9.12616 9.17237C8.98626 8.78147 8.84502 8.62369 8.47017 8.62369H7.00289C6.58318 8.62369 6.49951 8.81367 6.49951 9.02232C6.49951 9.39712 6.99686 11.2518 8.81624 13.7048C10.0292 15.3798 11.7367 16.2878 13.2924 16.2878C14.2248 16.2878 14.34 16.0862 14.34 15.7385V14.4724C14.34 14.0693 14.429 13.9881 14.7242 13.9881C14.9411 13.9881 15.3146 14.0937 16.1854 14.9007C17.1801 15.8576 17.3448 16.2872 17.9037 16.2872H19.371C19.7901 16.2872 19.9996 16.0856 19.8791 15.6876C19.7472 15.2916 19.272 14.7152 18.6414 14.0332C18.2987 13.6442 17.7866 13.2256 17.6306 13.0163C17.4131 12.7465 17.476 12.6274 17.6306 12.3878C17.6313 12.3885 19.4192 9.96576 19.6053 9.1421Z" fill="#F9A43F"/>
                                <rect x="2.83936" y="2.08887" width="20.8636" height="20.8636" rx="6" stroke="#F9A43F" stroke-width="2"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="23" viewBox="0 0 24 23" fill="none">
                                <path d="M12.4361 9.45168V8.21051C12.4361 7.67267 12.5602 7.38307 13.429 7.38307H14.5047V5.31445H12.8498C10.7812 5.31445 9.95372 6.67974 9.95372 8.21051V9.45168H8.29883V11.5203H9.95372V17.7261H12.4361V11.5203H14.2564L14.5047 9.45168H12.4361Z" fill="#F9A43F"/>
                                <rect x="1.59082" y="1.08887" width="20.8636" height="20.8636" rx="6" stroke="#F9A43F" stroke-width="2"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer__bottom">
                <div class="section__column">
                    <a href="#">© 2021 MagicGoldFish.ua</a>
                    <a href="#">Privacy Policy</a>
                </div>
                <div class="section__column">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="59" height="17" viewBox="0 0 59 17" fill="none">
                            <path d="M12.8335 2.40038L10.655 9.94721H10.2823L8.1037 2.40038C7.73098 1.12332 6.56136 0.244141 5.22467 0.244141H0V16.6726H5.23109V6.96312H5.60384L8.59855 16.6726H12.3387L15.327 6.96312H15.6997V16.6726H20.9309V0.244141H15.7062C14.3759 0.244141 13.2063 1.12332 12.8335 2.40038ZM41.7973 16.6726H47.0606V11.8147H52.3561C55.1258 11.8147 57.4844 10.2488 58.3968 8.04767H41.7973V16.6726ZM32.4727 1.97683L28.7904 9.95364H28.4176V0.244141H23.1865V16.6726H27.6272C28.7968 16.6726 29.857 15.9924 30.3455 14.9399L34.0278 6.96955H34.4007V16.6726H39.6317V0.244141H35.191C34.0213 0.244141 32.9611 0.924382 32.4727 1.97683Z" fill="#929292"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M52.8761 0.244141C54.3863 0.244141 55.7551 0.821704 56.7898 1.77148C57.9465 2.82393 58.6727 4.33844 58.6727 6.0262C58.6727 6.37273 58.6342 6.71285 58.5763 7.04656H48.8596C45.5692 7.04656 42.7802 4.89032 41.8419 1.91266C41.8291 1.88057 41.8226 1.84207 41.8098 1.80356C41.7841 1.71372 41.7648 1.61746 41.7391 1.52762C41.6427 1.11048 41.5784 0.686938 41.5527 0.244141H52.8761Z" fill="#929292"/>
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="16" viewBox="0 0 45 16" fill="none">
                            <path d="M22.2485 0.483502L19.2304 14.9649H15.5933L18.65 0.483502H22.2485ZM37.5709 9.81861L39.4669 4.39308L40.5503 9.8585H37.5709V9.81861ZM41.6337 14.9649H45L42.0593 0.483502H38.9639C38.2674 0.483502 37.687 0.882438 37.4162 1.56063L31.9604 14.9649H35.7911L36.5262 12.8106H41.1694L41.6337 14.9649ZM32.1539 10.2175C32.1926 6.38776 27.0077 6.18829 27.0464 4.47286C27.0464 3.95425 27.5107 3.39574 28.5942 3.27606C29.1359 3.19627 30.5675 3.15637 32.1926 3.91435L32.8117 0.882438C31.9218 0.523396 30.7997 0.244141 29.4067 0.244141C25.8083 0.244141 23.2932 2.19893 23.2545 5.03137C23.2158 7.10584 25.0731 8.30265 26.4273 8.98084C27.8203 9.69893 28.3233 10.1777 28.3233 10.7761C28.3233 11.7734 27.1625 12.1723 26.1565 12.2122C24.3379 12.2521 23.2545 11.6936 22.4033 11.2947L21.7455 14.4862C22.5967 14.8851 24.1445 15.2441 25.7696 15.2441C29.6389 15.2042 32.1152 13.2495 32.1539 10.2175ZM17.1023 0.483502L11.1823 14.9649H7.35168L4.41101 3.39574C4.25623 2.67765 4.10146 2.43829 3.59845 2.11914C2.70851 1.64042 1.27687 1.16169 0 0.882438L0.0773861 0.483502H6.26827C7.08083 0.483502 7.73861 1.04201 7.93207 1.95957L9.47979 10.3372L13.2717 0.483502H17.1023Z" fill="#929292"/>
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="18" viewBox="0 0 29 18" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2358 1.87695H17.8495V15.6164H10.2358V1.87695Z" fill="#929292"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7322 8.74574C10.7322 5.95924 12.0288 3.47623 14.0428 1.87606C12.5806 0.717316 10.7046 0 8.69057 0C3.89006 0 0 3.91765 0 8.74574C0 13.5738 3.89006 17.4915 8.69057 17.4915C10.7322 17.4915 12.5806 16.7742 14.0428 15.6154C12.0288 14.0153 10.7322 11.5322 10.7322 8.74574Z" fill="#929292"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M28.1134 8.74574C28.1134 13.5738 24.2233 17.4915 19.4228 17.4915C17.3813 17.4915 15.5328 16.7742 14.0706 15.6154C16.0846 14.0153 17.3813 11.5322 17.3813 8.74574C17.3813 5.95924 16.0846 3.47623 14.043 1.87606C15.5328 0.717316 17.4088 0 19.4228 0C24.2233 0 28.1134 3.91765 28.1134 8.74574Z" fill="#929292"/>
                        </svg>
                    </a>
                </div>
                <div class="section__column">
                    <a href="#" class="first">Content is not a public offer</a>
                    <a href="#" class="last">Terms of use</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="/js/slider.js"></script>
    <script src="/js/nav.js"></script>
    <script src="/js/cart.js"></script>
    <script src="/js/price.js"></script>
</body>

</html>