@extends("master")

@section('title', 'Settings')

@section('content')
    <main class="main user-settings">
        <div class="main__wrapper">
            <p class="nav"> <a href="{{route('index')}}">Main</a> > <a href="{{route('profile')}}">Personal account</a> > <a href="{{route('profile')}}" class="active-menu__item">User Settings</a> </p>
            <h6 class="page-header">Settings</h6>
            <section class="main__user-settings">
                <div class="user-settings__wrapper">
                    <aside class="user-setting__menu">
                        <ul>
                            <li><a href="{{route('profile')}}">Profile</a></li>
                            <li><a href="{{route('user-orders')}}">Orders</a></li>
                            <li><a href="user-events">Events</a></li>
                            <li><a href="{{route('user-settings')}}" class="active-item">Settings</a></li>
                        </ul>
                    </aside>
                    <article class="user-orders__section user info">
                        <div class="user-info__item">
                            <div class="info">
                                <img class="user-image" src="/img/user-image-1.png" alt="user-image">
                                <div class="change">
                                    <details class="change-btn">
                                        <summary>
                                      <div class="button">
                                        <svg class="change-icon" xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24" fill="none">
                                            <path d="M3.375 3.5V0.125H5.625V3.5H9V5.75H5.625V9.125H3.375V5.75H0V3.5H3.375ZM6.75 10.25V6.875H10.125V3.5H18L20.0588 5.75H23.625C24.8625 5.75 25.875 6.7625 25.875 8V21.5C25.875 22.7375 24.8625 23.75 23.625 23.75H5.625C4.3875 23.75 3.375 22.7375 3.375 21.5V10.25H6.75ZM14.625 20.375C17.73 20.375 20.25 17.855 20.25 14.75C20.25 11.645 17.73 9.125 14.625 9.125C11.52 9.125 9 11.645 9 14.75C9 17.855 11.52 20.375 14.625 20.375ZM11.025 14.75C11.025 16.7412 12.6337 18.35 14.625 18.35C16.6162 18.35 18.225 16.7412 18.225 14.75C18.225 12.7587 16.6162 11.15 14.625 11.15C12.6337 11.15 11.025 12.7587 11.025 14.75Z" fill="#2A2A2A"/>
                                        </svg>
                                      </div>
                                      <div class="details__modal-overlay"></div>
                                    </summary>
                                    <div class="details__modal details__modal_large">
                                      <div class="details__modal-title">
                                        <h1>Change image</h1>
                                      </div>
                                      <div class="details__modal-content">
                                        <form action="main" method="post">
                                            <fieldset class="fieldset">
                                                <div class="input-row">
                                                    <p>New image</p>
                                                    <input type="file" id="img" accept="image/*" required>
                                                </div>                                           
                                            </fieldset>
                                            <input type="submit" value="Change" class="submit-btn">
                                        </form>
                                      </div>
                                        </div>
                                    </details>
                                </div>
                                <div class="info"><p class="bold-text name">William Harris</p>
                                </div>
                            </div>
                            <div class="change">
                                <details class="change-btn">
                                    <summary>
                                      <div class="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                            <path d="M16.5469 5.05019V7.35249C15.7248 7.38948 14.9464 7.73334 14.3654 8.31619L8.81087 13.8695C8.34052 14.341 8.00587 14.931 7.84487 15.5773L7.60222 16.549H3.32422C2.56172 16.549 1.83045 16.2461 1.29129 15.707C0.75212 15.1678 0.449219 14.4365 0.449219 13.674V5.04904H16.5469V5.05019ZM13.6719 0.450195C14.4344 0.450195 15.1657 0.753096 15.7048 1.29226C16.244 1.83143 16.5469 2.5627 16.5469 3.32519V3.90019H0.449219V3.32519C0.449219 2.5627 0.75212 1.83143 1.29129 1.29226C1.83045 0.753096 2.56172 0.450195 3.32422 0.450195H13.6731H13.6719ZM9.62392 14.6826L15.1784 9.12809C15.5819 8.72488 16.1291 8.49849 16.6995 8.4987C17.27 8.49892 17.817 8.72573 18.2202 9.12924C18.6234 9.53276 18.8498 10.0799 18.8496 10.6504C18.8493 11.2208 18.6225 11.7678 18.219 12.171L12.6657 17.7232C12.3421 18.0469 11.9367 18.2767 11.4927 18.3879L9.76997 18.8191C9.59863 18.8617 9.41921 18.8592 9.24913 18.8119C9.07906 18.7646 8.92411 18.6741 8.79934 18.5492C8.67457 18.4243 8.58422 18.2693 8.53707 18.0991C8.48992 17.929 8.48758 17.7496 8.53027 17.5783L8.96037 15.8556C9.07192 15.4117 9.30077 15.0057 9.62507 14.6826H9.62392Z" fill="#2A2A2A"/>
                                            </svg> 
                                        change
                                      </div>
                                      <div class="details__modal-overlay"></div>
                                    </summary>
                                    <div class="details__modal">
                                      <div class="details__modal-title">
                                        <h1>Change name</h1>
                                      </div>
                                      <div class="details__modal-content">
                                        <form action="main" method="post">
                                            <fieldset class="fieldset">
                                                <div class="input-row">
                                                    <p>New name</p>
                                                    <input type="text" id="name" placeholder="Name" required>
                                                </div>
                                                <div class="input-row">
                                                    <p>New surname</p>
                                                    <input type="text" id="surname" placeholder="Surname" required>
                                                </div>                                            
                                            </fieldset>
                                            <input type="submit" value="Change" class="submit-btn">
                                        </form>
                                      </div>
                                    </div>
                                </details>
                            </div>
                        </div>
                        <div class="user-info__item">
                            <div class="info"><p class="bold-text">Phone:  </p>+7 903 5084301</div>
                            <div class="change">
                                <details class="change-btn">
                                    <summary>
                                      <div class="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                            <path d="M16.5469 5.05019V7.35249C15.7248 7.38948 14.9464 7.73334 14.3654 8.31619L8.81087 13.8695C8.34052 14.341 8.00587 14.931 7.84487 15.5773L7.60222 16.549H3.32422C2.56172 16.549 1.83045 16.2461 1.29129 15.707C0.75212 15.1678 0.449219 14.4365 0.449219 13.674V5.04904H16.5469V5.05019ZM13.6719 0.450195C14.4344 0.450195 15.1657 0.753096 15.7048 1.29226C16.244 1.83143 16.5469 2.5627 16.5469 3.32519V3.90019H0.449219V3.32519C0.449219 2.5627 0.75212 1.83143 1.29129 1.29226C1.83045 0.753096 2.56172 0.450195 3.32422 0.450195H13.6731H13.6719ZM9.62392 14.6826L15.1784 9.12809C15.5819 8.72488 16.1291 8.49849 16.6995 8.4987C17.27 8.49892 17.817 8.72573 18.2202 9.12924C18.6234 9.53276 18.8498 10.0799 18.8496 10.6504C18.8493 11.2208 18.6225 11.7678 18.219 12.171L12.6657 17.7232C12.3421 18.0469 11.9367 18.2767 11.4927 18.3879L9.76997 18.8191C9.59863 18.8617 9.41921 18.8592 9.24913 18.8119C9.07906 18.7646 8.92411 18.6741 8.79934 18.5492C8.67457 18.4243 8.58422 18.2693 8.53707 18.0991C8.48992 17.929 8.48758 17.7496 8.53027 17.5783L8.96037 15.8556C9.07192 15.4117 9.30077 15.0057 9.62507 14.6826H9.62392Z" fill="#2A2A2A"/>
                                            </svg> 
                                        change
                                      </div>
                                      <div class="details__modal-overlay"></div>
                                    </summary>
                                    <div class="details__modal">
                                      <div class="details__modal-title">
                                        <h1>Change phone</h1>
                                      </div>
                                      <div class="details__modal-content">
                                        <form action="main" method="post">
                                            <fieldset class="fieldset">
                                                <div class="input-row">
                                                    <p>New Phone</p>
                                                    <input type="number" id="phone" placeholder="Phone" required>
                                                </div>                                           
                                            </fieldset>
                                            <input type="submit" value="Change" class="submit-btn">
                                        </form>
                                      </div>
                                    </div>
                                </details>
                            </div>
                        </div>
                        <div class="user-info__item">
                            <div class="info"><p class="bold-text">E-mail:  </p>  ivanov@gmail.com</div>
                            <div class="change">
                                <details class="change-btn">
                                    <summary>
                                      <div class="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                            <path d="M16.5469 5.05019V7.35249C15.7248 7.38948 14.9464 7.73334 14.3654 8.31619L8.81087 13.8695C8.34052 14.341 8.00587 14.931 7.84487 15.5773L7.60222 16.549H3.32422C2.56172 16.549 1.83045 16.2461 1.29129 15.707C0.75212 15.1678 0.449219 14.4365 0.449219 13.674V5.04904H16.5469V5.05019ZM13.6719 0.450195C14.4344 0.450195 15.1657 0.753096 15.7048 1.29226C16.244 1.83143 16.5469 2.5627 16.5469 3.32519V3.90019H0.449219V3.32519C0.449219 2.5627 0.75212 1.83143 1.29129 1.29226C1.83045 0.753096 2.56172 0.450195 3.32422 0.450195H13.6731H13.6719ZM9.62392 14.6826L15.1784 9.12809C15.5819 8.72488 16.1291 8.49849 16.6995 8.4987C17.27 8.49892 17.817 8.72573 18.2202 9.12924C18.6234 9.53276 18.8498 10.0799 18.8496 10.6504C18.8493 11.2208 18.6225 11.7678 18.219 12.171L12.6657 17.7232C12.3421 18.0469 11.9367 18.2767 11.4927 18.3879L9.76997 18.8191C9.59863 18.8617 9.41921 18.8592 9.24913 18.8119C9.07906 18.7646 8.92411 18.6741 8.79934 18.5492C8.67457 18.4243 8.58422 18.2693 8.53707 18.0991C8.48992 17.929 8.48758 17.7496 8.53027 17.5783L8.96037 15.8556C9.07192 15.4117 9.30077 15.0057 9.62507 14.6826H9.62392Z" fill="#2A2A2A"/>
                                            </svg> 
                                        change
                                      </div>
                                      <div class="details__modal-overlay"></div>
                                    </summary>
                                    <div class="details__modal">
                                      <div class="details__modal-title">
                                        <h1>Change e-mail</h1>
                                      </div>
                                      <div class="details__modal-content">
                                        <form action="main" method="post">
                                            <fieldset class="fieldset">
                                                <div class="input-row">
                                                    <p>New email</p>
                                                    <input type="email" id="email" placeholder="Email" required>
                                                </div>                                           
                                            </fieldset>
                                            <input type="submit" value="Change" class="submit-btn">
                                        </form>
                                      </div>
                                    </div>
                                </details>
                            </div>
                        </div>
                        <p class="bold-text form-header">
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
                    </article>
                </div>
            </section>
        </div>
    </main>
@endsection