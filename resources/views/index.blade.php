@extends('master')

@section('title', 'GoldFish')

@section('content')
    <section class="slider main-slider">
        <div class="slider__wrapper">
            <div class="slider__items">
                <div class="slider__item main-slider__item">
                    <img src="/img/slider-item2.png" alt="not found">
                    <div class="slider__item_text">
                        <div class="block">
                            <p>Board game wargame</p>
                            <p class="block_header">Warhmmer games</p>
                        </div>
                        <div class="slider__item_button">
                            <a href="#">More</a>
                        </div>
                    </div>
                </div>
                <div class="slider__item main-slider__item">
                    <img src="/img/slider-item1.png" alt="not found">
                    <div class="slider__item_text">
                        <div class="block">
                            <p>Board game wargame</p>
                            <p class="block_header">Warhmmer games</p>
                        </div>
                        <div class="slider__item_button">
                            <a href="#">More</a>
                        </div>
                    </div>
                </div>
                <div class="slider__item main-slider__item">
                    <img src="/img/slider-item3.png" alt="not found">
                    <div class="slider__item_text">
                        <div class="block">
                            <p>Most played card game</p>
                            <p class="block_header">Magic: the Gathering</p>
                        </div>
                        <div class="slider__item_button">
                            <a href="#">More</a>
                        </div>
                    </div>
                </div>
                <div class="slider__item main-slider__item">
                    <img src="/img/slider-item2.png" alt="not found">
                    <div class="slider__item_text">
                        <div class="block">
                            <p>Try games of different genres</p>
                            <p class="block_header">Whole catalog</p>
                        </div>
                        <div class="slider__item_button">
                            <a href="#">More</a>
                        </div>
                    </div>
                </div>
                <div class="slider__item main-slider__item">
                    <img src="/img/slider-item1.png" alt="not found">
                    <div class="slider__item_text">
                        <div class="block">
                            <p>Board game wargame</p>
                            <p class="block_header">Warhmmer games</p>
                        </div>
                        <div class="slider__item_button">
                            <a href="#">More</a>
                        </div>
                    </div>
                </div>
                <div class="slider__item main-slider__item">
                    <img src="/img/slider-item2.png" alt="not found">
                    <div class="slider__item_text">
                        <div class="block">
                            <p>Try games of different genres</p>
                            <p class="block_header">Whole catalog</p>
                        </div>
                        <div class="slider__item_button">
                            <a href="#">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="slider__control" data-slide="prev" id="prev"></a>
        <a href="#" class="slider__control" data-slide="next" id="next"></a>

    </section>
    <main class="main">
        <div class="main__wrapper">
            <h6 class="section-header">Catalog</h6>
            <section class="main__catalog catalog">
                <div class="catalog__big-block">
                    <div class="image-block">
                        <img src="/img/catalog_img1.png" alt="not found">
                        <div class="image-text">
                            <p>Board games</p>
                        </div>
                    </div>
                </div>
                <div class="catalog__small-block">
                    <div class="catalog__first-block">
                        <div class="image-block">
                            <img src="/img/catalog_img2.png" alt="not found">
                            <div class="image-text">
                                <p>Wargames</p>
                            </div>
                        </div>
                        <div class="image-block">
                            <img src="/img/catalog_img3.png" alt="not found">
                            <div class="image-text">
                                <p>Magic:the Cathering</p>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__last-block">
                        <div class="image-block">
                            <img src="/img/catalog_img4.png" alt="not found">
                            <div class="image-text">
                                <p>Paints</p>
                            </div>
                        </div>
                        <div class="image-block">
                            <img src="/img/catalog_img5.png" alt="not found">
                            <div class="image-text">
                                <p>Whole catalog</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <h6 class="section-header">Hurry up to buy</h6>
             <section class="main__slider slider hurry-up">
            <!-- {{$i = 0}}
                @foreach($products as $product)
                    @include('card', compact('product'))
                    @if ($i>2)
                        @break
                    @endif
                    {{$i++}}
                @endforeach -->
                @include('card', compact('products'))
                @include('card', compact('products'))
                @include('card', compact('products'))
                @include('card', compact('products'))
                
            </section>
            <h6 class="section-header">Special offer</h6>
            <section class="main__slider slider special-offer">
            @include('card-offered')
            </section>
            <h6 class="section-header">Upcoming events</h6>
            <section class="main__img-block events">
                <div class="img-block__wrapper">
                    <div class="img-block__item">
                        <img src="/img/events_img1.png" alt="not found">
                        <div class="img-block__text">
                            <p class="date">October 31, 2021 19:00</p>
                            <p class="game-name">Halloween c GoldFish</p>
                            <p class="description">We will gather to find out who was the Mafia after all and what will be with the one who was killed ..</p>
                        </div>
                    </div>
                    <div class="img-block__item">
                        <img src="/img/events_img2.png" alt="not found">
                        <div class="img-block__text">
                            <p class="date">November 9, 2021 18:30</p>
                            <p class="game-name">Tournament Warhammer</p>
                            <p class="description">Ready to take on the fierce Warhammer battle? Not? We are you be sure to teach!</p>
                        </div>
                    </div>
                </div>
                <div class="more-btn">
                    <a href="#">Show more</a>
                </div>
            </section>
            <h6 class="section-header">More interesting information</h6>
            <section class="main__img-block more-info">
                <div class="img-block__wrapper">
                    <div class="img-block__item">
                        <img src="/img/more-info_img1.png" alt="not found">
                        <div class="img-block__text">
                            <p class="game-name">Aeronautics Imperialis: introduction to the game</p>
                            <p class="description">Let's get acquainted with the rules of the game in detail</p>
                        </div>
                    </div>
                    <div class="img-block__item">
                        <img src="/img/more-info_img2.png" alt="not found">
                        <div class="img-block__text">
                            <p class="game-name">The best board games on Steam for games with friends in quarantine</p>
                            <p class="description">Rated 2021</p>
                        </div>
                    </div>
                    <div class="img-block__item">
                        <img src="/img/more-info_img3.png" alt="not found">
                        <div class="img-block__text">
                            <p class="game-name">Desirable but unlikely releases</p>
                            <p class="description">A small list of "what if ..."</p>
                        </div>
                    </div>
                </div>
                <div class="more-btn">
                    <a href="#">Learn more</a>
                </div>
            </section>
            <section class="main__img-block game-center">
                <div class="img-block__wrapper">
                    <div class="img-block__item img-block__text">
                        <p class="block-header">About the game center "GoldFish"</p>
                        <p class="item">"GoldFish" is a store where you can buy a great gift for yourself and your loved ones.</p>
                        <p>The assortment of our store includes thousands of board games for every taste: simple and more difficult, family and only for adults, for two and for large companies, detective and logic, role-playing and strategic board games.
                            GoldFish also regularly hosts its own games library: Magic: the Gathering (by Wizards of the coast) and Warhammer (by Games Workshop) tournaments.</p>
                        <p> In our store you can find the necessary accessories for your favorite games (protectors for cards and collections), tools for self-decoration and painting of figurines (cases, stands, Vallejo paints, etc.) and much more.</p>
                        <p>"GoldFish" is not only a board game store, but also a full-fledged hobby center. Here you can rent tables for games with friends, take training and master classes on the games you are interested in, make new acquaintances and join
                            the gaming community!</p>
                    </div>
                    <div class="img-block__item">
                        <img src="/img//game-center_img.png" alt="not found">
                    </div>
                </div>
            </section>
            <section class="main__info info">
                <div class="info__wrapper">
                    <div class="info__item info__contacts">
                        <p class="bold-text header-text">Contacts</p>
                        <div class="media-block">
                            <div class="telephon">
                                <div class="img-block">
                                    <img src="/img/phone-act.png" alt="not found">
                                </div>
                                <p><span>Phone:</span> +7 (495) 911-10-11</p>
                            </div>
                            <div class="email">
                                <div class="img-block">
                                    <img src="/img/letter.png" alt="not found">
                                </div>
                                <p> <span>E-mail: </span>msk@magicgoldfish.ua</p>
                            </div>
                            <div class="address">
                                <div class="img-block">
                                    <img src="/img/map-mark.png" alt="not found">
                                </div>
                                <p><span>Address: </span>g. Moscow metro station Taganskaya (ring) Maly Drovyanoy Lane 6</p>
                            </div>
                            <div class="time">
                                <div class="img-block">
                                    <img src="/img/time.png" alt="not found">
                                </div>
                                <p><span>Club working hours:</span> 11:00-23:00 (daily)</p>
                            </div>
                        </div>
                        <p class="bold-text">
                            Do you have any questions?
                        </p>
                        <form action="/handling-form-page" method="post" class="info__form">
                            <fieldset class="info__fieldset">
                                <label for="name" class="info__label">Your name:</label> <br>
                                <input class="info__input" type="text" id="name" name="user_name" placeholder="Name" required/>
                            </fieldset>
                            <fieldset class="info__fieldset">
                                <label for="telephone">Telephone:</label> <br>
                                <input class="info__input" type="tel" id="telephone" name="user_telephone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="___-___-____" required/>
                            </fieldset>
                            <fieldset class="info__fieldset">
                                <label for="comment">Your comment:</label> <br>
                                <textarea class="info__texarea" id="comment" name="user_comment" rows="4" cols="50" placeholder="Comment"></textarea>
                            </fieldset>
                            <input class="btn" type="submit" value="Request a call" formmethod="post" />
                        </form>
                        <div class="agreement">
                            <p>By clicking on the "Request a call" button, <u>I agree to processing of personal data.</u></p>
                        </div>
                    </div>

                    <div class="info__item info__map">
                        <iframe class="info__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.524744163564!2d-73.86733757629845!3d40.67926782826824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25dbff4901773%3A0x3063cbdf26b8e9b2!2sGameStop!5e0!3m2!1sru!2spl!4v1649446619219!5m2!1sru!2spl"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection