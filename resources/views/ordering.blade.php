@extends("layouts.master");

@section('title', 'Ordering')

@section('content')
    <main class="main ordering">
        <div class="main__wrapper">
            <p class="nav"> <a href="{{route('index')}}">Main</a> > <a href="{{route('cart')}}">Cart</a> > <a href="{{route('ordering')}}" class="active-menu__item">Ordering</a> </p>
            <h6 class="page-header">Ordering</h6>
            <section class="main__form form">
                <div class="form__wrapper">
                    <section class="form__section">
                        <form action="{{route('cart-confirm')}}" autocomplete="on" method="post">
                            <h6 class="section-second-header">Delivery address</h6>
                            <fieldset class="fieldset address">
                                <div class="input-row">
                                    <p>Country *</p>
                                    <input type="text" id="country" placeholder="Country" required>
                                </div>
                                <div class="input-row">
                                    <p>City *</p>
                                    <input type="text" id="city" placeholder="City" required>
                                </div>
                                <div class="input-row">
                                    <p>Street *</p>
                                    <input type="text" id="street" placeholder="Street" required>
                                </div>
                                <div class="input-row">
                                    <p>House *</p>
                                    <input type="number" id="house" placeholder="House" required>
                                </div>
                                <div class="input-row">
                                    <p>Flat *</p>
                                    <input type="number" id="flat" placeholder="Flat" required>
                                </div>
                                <p class="under-text">* Mandatory fields</p>
                            </fieldset>
                            <h6 class="section-second-header">Delivery method</h6>
                            <fieldset class="fieldset method">
                                <div class="fieldset__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <path d="M16.7998 17.6998V23.0998C16.7998 23.3385 16.8946 23.5674 17.0634 23.7362C17.2322 23.905 17.4611 23.9998 17.6998 23.9998H23.0998C23.3385 23.9998 23.5674 23.905 23.7362 23.7362C23.905 23.5674 23.9998 23.3385 23.9998 23.0998V17.6998C23.9998 17.4611 23.905 17.2322 23.7362 17.0634C23.5674 16.8946 23.3385 16.7998 23.0998 16.7998H17.6998C17.4611 16.7998 17.2322 16.8946 17.0634 17.0634C16.8946 17.2322 16.7998 17.4611 16.7998 17.6998ZM18.5998 22.1998V18.5998H22.1998V22.1998H18.5998Z" fill="#2A2A2A"/>
                                        <path d="M5.99961 0.599609C5.86769 0.599659 5.7374 0.628707 5.61796 0.684696C5.49851 0.740686 5.39284 0.822248 5.30841 0.923609L0.808409 6.32361C0.673588 6.48528 0.599704 6.6891 0.599609 6.89961V9.59961C0.599609 11.198 1.29441 12.6362 2.39961 13.6244V28.4996C2.39961 28.7383 2.49443 28.9672 2.66321 29.136C2.832 29.3048 3.06091 29.3996 3.29961 29.3996H26.6996C26.9383 29.3996 27.1672 29.3048 27.336 29.136C27.5048 28.9672 27.5996 28.7383 27.5996 28.4996V13.6244C28.7048 12.6344 29.3996 11.198 29.3996 9.59961V6.89961V6.86721C29.3996 6.70521 29.3996 6.57561 29.1908 6.32361L24.6908 0.923609C24.6064 0.822248 24.5007 0.740686 24.3813 0.684696C24.2618 0.628707 24.1315 0.599659 23.9996 0.599609H5.99961ZM5.99961 13.1996C5.04483 13.1996 4.12916 12.8203 3.45402 12.1452C2.77889 11.4701 2.39961 10.5544 2.39961 9.59961V7.79961H9.59961V9.59961C9.59961 10.5544 9.22032 11.4701 8.54519 12.1452C7.87006 12.8203 6.95439 13.1996 5.99961 13.1996ZM14.9996 13.1996C14.0448 13.1996 13.1292 12.8203 12.454 12.1452C11.7789 11.4701 11.3996 10.5544 11.3996 9.59961V7.79961H18.5996V9.59961C18.5996 10.5544 18.2203 11.4701 17.5452 12.1452C16.8701 12.8203 15.9544 13.1996 14.9996 13.1996ZM23.9996 13.1996C23.0448 13.1996 22.1292 12.8203 21.454 12.1452C20.7789 11.4701 20.3996 10.5544 20.3996 9.59961V7.79961H27.5996V9.59961C27.5996 10.5544 27.2203 11.4701 26.5452 12.1452C25.8701 12.8203 24.9544 13.1996 23.9996 13.1996ZM5.99961 27.5996H4.19961V14.6936C5.33415 15.0958 6.57059 15.1069 7.7122 14.7253C8.8538 14.3437 9.83498 13.5912 10.4996 12.5876C10.9922 13.33 11.661 13.9388 12.4462 14.3597C13.2314 14.7806 14.1087 15.0004 14.9996 14.9996C15.8907 15.0002 16.7681 14.7801 17.5533 14.3589C18.3386 13.9377 19.0072 13.3285 19.4996 12.5858C20.1642 13.5894 21.1454 14.3419 22.287 14.7235C23.4286 15.1051 24.6651 15.094 25.7996 14.6918V27.5996H14.9996V17.6996C14.9996 17.4609 14.9048 17.232 14.736 17.0632C14.5672 16.8944 14.3383 16.7996 14.0996 16.7996H6.89961C6.66091 16.7996 6.432 16.8944 6.26321 17.0632C6.09443 17.232 5.99961 17.4609 5.99961 17.6996V27.5996ZM9.85161 5.99961H3.42201L6.42081 2.39961H11.0504L9.85161 5.99961ZM18.2504 5.99961H11.7488L12.9476 2.39961H17.0516L18.2504 5.99961ZM20.1476 5.99961L18.9488 2.39961H23.5784L26.579 5.99961H20.1476ZM7.79961 27.5996V18.5996H13.1996V27.5996H7.79961Z" fill="#2A2A2A"/>
                                    </svg>
                                    <div class="text">
                                        <b class="type">Pickup from the store</b>
                                        <p class="price">Free today</p>
                                    </div>
                                    <input type="radio" name="delivery-method">
                                </div>
                                <div class="fieldset__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="33" viewBox="0 0 24 33" fill="none">
                                        <path d="M4.08366 0.1875C2.34199 0.1875 0.916992 1.65169 0.916992 3.44125V27.8444C0.916992 28.7074 1.25062 29.535 1.84449 30.1452C2.43835 30.7554 3.24381 31.0982 4.08366 31.0982V32.725H7.25033V31.0982H16.7503V32.725H19.917V31.0982C21.6745 31.0982 23.0837 29.6502 23.0837 27.8444V3.44125C23.0837 2.5783 22.75 1.7507 22.1562 1.1405C21.5623 0.530305 20.7568 0.1875 19.917 0.1875H4.08366ZM4.08366 3.44125H19.917V8.32188H4.08366V3.44125ZM4.08366 11.5756H19.917V16.4563H4.08366V11.5756ZM4.08366 19.71H10.417V27.8444H4.08366V19.71ZM13.5837 19.71H19.917V27.8444H13.5837V19.71ZM5.66699 21.3369V26.2175H8.83366V21.3369H5.66699ZM15.167 21.3369V26.2175H18.3337V21.3369H15.167Z" fill="#2A2A2A"/>
                                    </svg>
                                    <div class="text">
                                        <b class="type">Pickup from 761 locations</b>
                                        <p class="price">From 150₽, 1 day</p>
                                    </div>
                                    <input type="radio" name="delivery-method">
                                </div>
                                <div class="fieldset__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="39" viewBox="0 0 38 39" fill="none">
                                        <path d="M4.75 19.043H19V21.4207H4.75V19.043Z" fill="#2A2A2A"/>
                                        <path d="M2.375 13.0977H14.25V15.4754H2.375V13.0977Z" fill="#2A2A2A"/>
                                        <path d="M35.529 19.7625L31.9665 11.4404C31.8751 11.2265 31.7229 11.0442 31.5289 10.9161C31.3349 10.788 31.1076 10.7198 30.8752 10.7199H27.3127V8.34219C27.3127 8.02688 27.1876 7.72449 26.9649 7.50153C26.7422 7.27858 26.4402 7.15332 26.1252 7.15332H7.12521V9.53107H24.9377V24.4586C24.3966 24.7731 23.9231 25.1918 23.5444 25.6905C23.1657 26.1892 22.8894 26.758 22.7313 27.3642H15.2691C14.9801 26.2435 14.2927 25.2668 13.3358 24.6172C12.379 23.9675 11.2183 23.6896 10.0714 23.8355C8.9245 23.9813 7.87009 24.5409 7.10583 25.4094C6.34157 26.2779 5.91992 27.3956 5.91992 28.553C5.91992 29.7105 6.34157 30.8282 7.10583 31.6967C7.87009 32.5652 8.9245 33.1248 10.0714 33.2706C11.2183 33.4165 12.379 33.1385 13.3358 32.4889C14.2927 31.8393 14.9801 30.8626 15.2691 29.7419H22.7313C22.9897 30.7623 23.5804 31.6672 24.4102 32.3137C25.24 32.9601 26.2613 33.3111 27.3127 33.3111C28.3641 33.3111 29.3855 32.9601 30.2152 32.3137C31.045 31.6672 31.6358 30.7623 31.8941 29.7419H34.4377C34.7527 29.7419 35.0547 29.6167 35.2774 29.3937C35.5001 29.1707 35.6252 28.8684 35.6252 28.553V20.2309C35.6253 20.0699 35.5925 19.9105 35.529 19.7625ZM10.6877 30.9308C10.218 30.9308 9.7588 30.7913 9.36824 30.5301C8.97767 30.2688 8.67326 29.8974 8.4935 29.463C8.31374 29.0285 8.26671 28.5504 8.35835 28.0892C8.44999 27.6279 8.67619 27.2043 9.00834 26.8717C9.34049 26.5392 9.76367 26.3127 10.2244 26.221C10.6851 26.1292 11.1626 26.1763 11.5966 26.3563C12.0306 26.5363 12.4015 26.841 12.6625 27.232C12.9234 27.6231 13.0627 28.0828 13.0627 28.553C13.0621 29.1835 12.8117 29.7879 12.3664 30.2337C11.9211 30.6794 11.3174 30.9302 10.6877 30.9308ZM27.3127 13.0977H30.0915L32.6375 19.0421H27.3127V13.0977ZM27.3127 30.9308C26.843 30.9308 26.3838 30.7913 25.9932 30.5301C25.6027 30.2688 25.2983 29.8974 25.1185 29.463C24.9387 29.0285 24.8917 28.5504 24.9833 28.0892C25.075 27.6279 25.3012 27.2043 25.6333 26.8717C25.9655 26.5392 26.3887 26.3127 26.8494 26.221C27.3101 26.1292 27.7876 26.1763 28.2216 26.3563C28.6556 26.5363 29.0265 26.841 29.2875 27.232C29.5484 27.6231 29.6877 28.0828 29.6877 28.553C29.6871 29.1835 29.4367 29.7879 28.9914 30.2337C28.5461 30.6794 27.9424 30.9302 27.3127 30.9308ZM33.2502 27.3642H31.8941C31.6325 26.3458 31.0408 25.4432 30.2117 24.7977C29.3826 24.1522 28.363 23.8005 27.3127 23.7976V21.4198H33.2502V27.3642Z" fill="#2A2A2A"/>
                                    </svg>
                                    <div class="text">
                                        <b class="type">Express delivery</b>
                                        <p class="price">From 180₽, 1-3 days</p>
                                    </div>
                                    <input type="radio" name="delivery-method">
                                </div>
                                <div class="fieldset__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="35" viewBox="0 0 34 35" fill="none">
                                        <g clip-path="url(#clip0_442_15572)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.2412 0.929209C17.8643 0.711365 17.4368 0.59668 17.0016 0.59668C16.5664 0.59668 16.1389 0.711365 15.762 0.929209L4.07454 7.68318C3.69778 7.90095 3.38488 8.21416 3.1673 8.59133C2.94971 8.9685 2.8351 9.39635 2.83496 9.83191V23.3413C2.83496 24.2277 3.30813 25.0475 4.07454 25.49L15.762 32.2454C16.1389 32.4632 16.5664 32.5779 17.0016 32.5779C17.4368 32.5779 17.8643 32.4632 18.2412 32.2454L29.9287 25.4914C30.3057 25.2735 30.6187 24.9601 30.8363 24.5826C31.0539 24.2052 31.1684 23.7771 31.1683 23.3413V9.83191C31.1682 9.39635 31.0535 8.9685 30.836 8.59133C30.6184 8.21416 30.3055 7.90095 29.9287 7.68318L18.2412 0.927791V0.929209ZM16.8245 2.77017C16.8784 2.73905 16.9395 2.72266 17.0016 2.72266C17.0638 2.72266 17.1249 2.73905 17.1787 2.77017L27.9808 9.01355L17.0016 15.359L6.02246 9.01355L16.8245 2.77017ZM4.95996 10.8573V23.3427C4.95996 23.4703 5.02796 23.5866 5.13704 23.649L15.9391 29.8924V17.2028L4.95996 10.8573ZM18.0641 29.8924L28.8662 23.649C28.9199 23.618 28.9646 23.5733 28.9957 23.5196C29.0267 23.4658 29.0432 23.4048 29.0433 23.3427V10.8559L18.0641 17.2014V29.891V29.8924Z" fill="#2A2A2A"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_442_15572">
                                        <rect width="34" height="34.0393" fill="white" transform="translate(0 0.0224609)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                    <div class="text">
                                        <b class="type">Mail delivery</b>
                                        <p class="price">From 180₽, from 3 days</p>
                                    </div>
                                    <input type="radio" name="delivery-method">
                                </div>
                            </fieldset>
                            <h6 class="section-second-header">Payment method</h6>
                            <fieldset class="fieldset payment">
                                <div class="fieldset__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="27" viewBox="0 0 35 27" fill="none">
                                        <path d="M0 4.99431C0 3.83265 0.460936 2.71856 1.28141 1.89714C2.10188 1.07573 3.21468 0.614258 4.375 0.614258H30.625C31.7853 0.614258 32.8981 1.07573 33.7186 1.89714C34.5391 2.71856 35 3.83265 35 4.99431V22.5145C35 23.6762 34.5391 24.7903 33.7186 25.6117C32.8981 26.4331 31.7853 26.8946 30.625 26.8946H4.375C3.21468 26.8946 2.10188 26.4331 1.28141 25.6117C0.460936 24.7903 0 23.6762 0 22.5145V4.99431ZM4.375 2.80428C3.79484 2.80428 3.23844 3.03502 2.8282 3.44573C2.41797 3.85644 2.1875 4.41348 2.1875 4.99431V7.18433H32.8125V4.99431C32.8125 4.41348 32.582 3.85644 32.1718 3.44573C31.7616 3.03502 31.2052 2.80428 30.625 2.80428H4.375ZM32.8125 11.5644H2.1875V22.5145C2.1875 23.0953 2.41797 23.6524 2.8282 24.0631C3.23844 24.4738 3.79484 24.7045 4.375 24.7045H30.625C31.2052 24.7045 31.7616 24.4738 32.1718 24.0631C32.582 23.6524 32.8125 23.0953 32.8125 22.5145V11.5644Z" fill="#2A2A2A"/>
                                        <path d="M4.375 18.1344C4.375 17.5535 4.60547 16.9965 5.0157 16.5858C5.42594 16.1751 5.98234 15.9443 6.5625 15.9443H8.75C9.33016 15.9443 9.88656 16.1751 10.2968 16.5858C10.707 16.9965 10.9375 17.5535 10.9375 18.1344V20.3244C10.9375 20.9052 10.707 21.4623 10.2968 21.873C9.88656 22.2837 9.33016 22.5144 8.75 22.5144H6.5625C5.98234 22.5144 5.42594 22.2837 5.0157 21.873C4.60547 21.4623 4.375 20.9052 4.375 20.3244V18.1344Z" fill="#2A2A2A"/>
                                    </svg>
                                    <div class="text">
                                        <b class="type">Payment by card</b>
                                        <p class="price">card,Apple pay,Google pay</p>
                                    </div>
                                    <input type="radio" name="payment-method">
                                </div>
                                <div class="fieldset__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="31" viewBox="0 0 33 31" fill="none">
                                        <path d="M33 26.125C33 26.6773 32.5523 27.125 32 27.125H5.09375C4.55872 27.125 4.125 26.6913 4.125 26.1562C4.125 25.6212 4.55872 25.1875 5.09375 25.1875H29.9375C30.4898 25.1875 30.9375 24.7398 30.9375 24.1875V12.625C30.9375 12.0727 31.3852 11.625 31.9375 11.625H32C32.5523 11.625 33 12.0727 33 12.625V26.125Z" fill="#2A2A2A"/>
                                        <path d="M25.8125 7.75C26.3648 7.75 26.8125 8.19772 26.8125 8.75V20.3125C26.8125 20.8648 26.3648 21.3125 25.8125 21.3125H3.0625C2.51021 21.3125 2.0625 20.8648 2.0625 20.3125V8.75C2.0625 8.19772 2.51022 7.75 3.0625 7.75H25.8125ZM28.875 6.8125C28.875 6.26022 28.4273 5.8125 27.875 5.8125H1C0.447715 5.8125 0 6.26022 0 6.8125V22.25C0 22.8023 0.447715 23.25 1 23.25H27.875C28.4273 23.25 28.875 22.8023 28.875 22.25V6.8125Z" fill="#2A2A2A"/>
                                        <path d="M6.1875 11.625H4.125V17.4375H6.1875V19.375H14.4375C13.07 19.375 11.7585 18.8647 10.7915 17.9563C9.8245 17.0479 9.28125 15.8159 9.28125 14.5312C9.28125 13.2466 9.8245 12.0146 10.7915 11.1062C11.7585 10.1978 13.07 9.6875 14.4375 9.6875H6.1875V11.625Z" fill="#2A2A2A"/>
                                        <path d="M22.6875 11.625V9.6875H14.4375C15.805 9.6875 17.1165 10.1978 18.0835 11.1062C19.0505 12.0146 19.5938 13.2466 19.5938 14.5312C19.5938 15.8159 19.0505 17.0479 18.0835 17.9563C17.1165 18.8647 15.805 19.375 14.4375 19.375H22.6875V17.4375H24.75V11.625H22.6875Z" fill="#2A2A2A"/>
                                    </svg>
                                    <div class="text">
                                        <b class="type">Cash payment</b>
                                        <p class="price">courier upon receipt</p>
                                    </div>
                                    <input type="radio" name="payment-method">
                                </div>
                            </fieldset>
                            <h6 class="section-second-header">Promo code</h6>
                            <fieldset class="fieldset">
                                <div class="input-row">
                                    <p>Promo code</p>
                                    <input type="text" id="promocode" placeholder="Promo">
                                </div>
                            </fieldset>
                            <h6 class="section-second-header">Contact details</h6>
                            <fieldset class="fieldset contact">
                                <div class="input-row">
                                    <p>Surname *</p>
                                    <input type="text" id="surname" placeholder="Surname" required>
                                </div>
                                <div class="input-row">
                                    <p>Name *</p>
                                    <input type="text" name="name" id="name" placeholder="Name" required>
                                </div>
                                <div class="input-row">
                                    <p>E-mail *</p>
                                    <input type="text" id="email" placeholder="E-mail" required>
                                </div>
                                <div class="input-row">
                                    <p>Phone *</p>
                                    <input class="info__input" type="tel" id="telephone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="___-___-____" required/>
                                </div>
                                <p class="under-text">* Mandatory fields</p>
                            </fieldset>
                            <fieldset class="fieldset">
                                <div class="checkbox-item">
                                    <input type="checkbox">
                                    <p>Create an account</p>
                                </div>
                                <p class="gray-text">By clicking the "Next" button, you accept the terms of the <u>Public Offer</u> and give consent to the processing of <u>personal data.</u></p>
                                <div class="checkbox-item">
                                    <input type="checkbox">
                                    <p>I have read and agree with the provisions of the <u>Public Offer</u></p>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox">
                                    <p>I agree <u>to the processing of personal data</u></p>
                                </div>
                                <p>Already registered? <a href="{{route('login')}}">Login </a></p>
                            </fieldset>
                            <h6 class="section-second-header">Outcome</h6>
                            <p class="outcome"><span class="price">Order price</span><span class="amount">{{$order->getFullPrice()}} $</span></p>
                            <p class="outcome"><span class="price">Delivery price</span><span class="amount">22$</span></p>
                            <p class="outcome"><span class="price">Amount of discount</span><span class="amount">0$</span></p>
                            <p class="outcome outcome-sum"><span class="price">Amount to be paid</span><span class="amount">{{$order->getFullPrice()}} $</span></p>
                            <div class="outcome-section">
                                <button class="btn" type="submit" id="send">Order</button>
                            </div>
                            @csrf
                        </form>
                    </section>
                    <aside class="cart__counter">
                        <p class="counter__header">There are
                            <span class="counter">3</span> items in the cart for the amount of
                            <span class="sum">432</span>$ :
                        </p>
                        <div class="counter__item">
                            <span class="game-name">Warhammer 40,000:Craftworlds Farseer</span> <br>
                            <span class="amount">2</span> pieces <span class="price">599$</span>
                        </div>
                        <div class="counter__item">
                            <span class="game-name">Vampire Munchkin</span> <br>
                            <span class="amount">1</span> pieces <span class="price">74$</span>
                        </div>
                    </aside>
                </div>
            </section>
        </div>
    </main>
@endsection