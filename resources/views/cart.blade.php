@extends("master")

@section('title', 'Cart')

    @section('content')
    <main class="main ordering">
        <div class="main__wrapper">
            <p class="nav"> <a href="{{route('index')}}">Main</a> > <a href="#" class="active-menu__item">Cart</a></p>
            <h6 class="page-header">Cart</h6>
            <section class="main__cart carts">
                <div class="cart__wrapper">
                    <section class="cart__section">
                        @foreach ($order->products as $product)
                        <div class="cart__item">
                            <div class="image-block">
                                <img src="/img/product-2.png" alt="not found">
                            </div>
                            <a class="name" href="{{route('product', [$product->category->code, $product->code]) }}" style="text-decoration:none; color:black;">{{$product->name}}</a>
                            <p class="price">{{$product->price}} $</p>
                            <div class="quantity">
                                <form action="{{route('cart-remove', $product) }}" method="post">
                                <button type="submit" href="{{route('cart-remove', $product) }}"  class="minus">-</button>
                                @csrf
                                </form>
                                <p class="amount">{{$product->pivot->count}}</p>
                                <form action="{{route('cart-add', $product) }}" method="post">
                                <button type="submit" href="{{route('cart-add', $product) }}"  class="plus">+</button>
                                @csrf
                                </form>
                            </div>
                            <p class="price">{{$product->getPriceCount()}}$</p>
                            <form action="{{route('cart-delete', $product) }}" method="post">
                                <button type="submit" href="{{route('cart-delete', $product) }}">
                                <svg class="clean" xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 24 27" fill="none">
                                <path d="M23.875 6.5C23.875 6.80617 23.7626 7.10167 23.5591 7.33047C23.3557 7.55926 23.0753 7.70543 22.7713 7.74125L22.625 7.75H21.5688L20.03 23.4C19.9462 24.2492 19.5496 25.0369 18.9172 25.6098C18.2849 26.1828 17.4621 26.5001 16.6087 26.5H7.39125C6.53794 26.5001 5.71509 26.1828 5.08275 25.6098C4.45041 25.0369 4.05378 24.2492 3.97 23.4L2.43125 7.75H1.375C1.04348 7.75 0.725537 7.6183 0.491116 7.38388C0.256696 7.14946 0.125 6.83152 0.125 6.5C0.125 6.16848 0.256696 5.85054 0.491116 5.61612C0.725537 5.3817 1.04348 5.25 1.375 5.25H7.625C7.625 4.67547 7.73816 4.10656 7.95803 3.57576C8.17789 3.04496 8.50015 2.56266 8.90641 2.15641C9.31266 1.75015 9.79496 1.42789 10.3258 1.20803C10.8566 0.988163 11.4255 0.875 12 0.875C12.5745 0.875 13.1434 0.988163 13.6742 1.20803C14.205 1.42789 14.6873 1.75015 15.0936 2.15641C15.4998 2.56266 15.8221 3.04496 16.042 3.57576C16.2618 4.10656 16.375 4.67547 16.375 5.25H22.625C22.9565 5.25 23.2745 5.3817 23.5089 5.61612C23.7433 5.85054 23.875 6.16848 23.875 6.5ZM14.8125 10.5625C14.586 10.5625 14.3671 10.6446 14.1963 10.7935C14.0256 10.9424 13.9146 11.1481 13.8837 11.3725L13.875 11.5V20.25L13.8837 20.3775C13.9146 20.6019 14.0257 20.8075 14.1964 20.9564C14.3672 21.1052 14.586 21.1872 14.8125 21.1872C15.039 21.1872 15.2578 21.1052 15.4286 20.9564C15.5993 20.8075 15.7104 20.6019 15.7413 20.3775L15.75 20.25V11.5L15.7413 11.3725C15.7104 11.1481 15.5994 10.9424 15.4287 10.7935C15.2579 10.6446 15.039 10.5625 14.8125 10.5625ZM9.1875 10.5625C8.96095 10.5625 8.74207 10.6446 8.57134 10.7935C8.4006 10.9424 8.28956 11.1481 8.25875 11.3725L8.25 11.5V20.25L8.25875 20.3775C8.28962 20.6019 8.40069 20.8075 8.57142 20.9564C8.74215 21.1052 8.961 21.1872 9.1875 21.1872C9.414 21.1872 9.63285 21.1052 9.80358 20.9564C9.97431 20.8075 10.0854 20.6019 10.1163 20.3775L10.125 20.25V11.5L10.1163 11.3725C10.0854 11.1481 9.9744 10.9424 9.80366 10.7935C9.63293 10.6446 9.41405 10.5625 9.1875 10.5625ZM12 3.375C11.5027 3.375 11.0258 3.57254 10.6742 3.92418C10.3225 4.27581 10.125 4.75272 10.125 5.25H13.875C13.875 4.75272 13.6775 4.27581 13.3258 3.92418C12.9742 3.57254 12.4973 3.375 12 3.375Z" fill="#2A2A2A"/>
                            </svg>
                                </button>
                                @csrf
                                </form>
                        </div>
                        @endforeach
                    </section>
                    <aside class="cart__counter">
                        <div class="cart__sum">
                            <span class="sum">Sum: </span><span class="price" id="sum">{{$order->getFullPrice()}}$</span>
                        </div>
                        <div class="cart__promocode">
                            <p>Promocode:</p>
                            <fieldset class="fieldset">
                                <input type="text" class="input">
                                <button type="button" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" viewBox="0 0 15 13" fill="none">
                                    <path d="M1.16699 6.5L5.91699 11.25L13.8337 1.75" stroke="#2A2A2A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </fieldset>
                        </div>
                        <div class="cart__promocode_active">
                            <p class="promo"></p>
                        </div>
                        <details class="order-btn">
                            <summary>
                              <div class="button">
                                Checkout
                              </div>
                              <div class="details__modal-overlay"></div>
                            </summary>
                            <div class="details__modal">
                              <div class="details__modal-title">
                                <h1>Login or Register</h1>
                              </div>
                              <div class="details__modal-content">
                                <div class="modal__enter">
                                    <div class="enter-text active" id="login">Login</div>
                                    <div class="enter-text" id="register">Register</div>
                                </div>
                                <form action="main" method="post">
                                    <fieldset class="fieldset">
                                        <div class="input-row">
                                            <p>Login</p>
                                            <input type="text" id="login" placeholder="Login" required>
                                        </div>
                                        <div class="input-row">
                                            <p>Password</p>
                                            <input type="password" id="password" placeholder="Password" required>
                                        </div>
                                        <div class="forget-password-btn">Forgot your password?</div>
                                    </fieldset>
                                    <input type="submit" value="Login" class="submit-btn">
                                </form>
                              </div>
                            </div>
                        </details>
                    </aside>
                </div>
            </section>
        </div>
    </main>
    @endsection
