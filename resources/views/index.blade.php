@extends('layout.main')

@section('title', 'главная')

@section('content')
<main>
    <div class="main-swiper-slider swiper-slider swiper">
        <div class="slider-buttons__wrapper">
            <div class="container">
                <div class="slider-buttons">
                    <button class="btn btn-rounded btn-rounded--filled-active swiper-button-prev">
                        <div class="btn-rounded__img">
                            <svg width="12" height="12" viewBox="0 0 14 14" fill=""
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 7L13.7071 7.70711C14.0976 7.31658 14.0976 6.68342 13.7071 6.29289L13 7ZM6.29289 12.2929C5.90237 12.6834 5.90237 13.3166 6.29289 13.7071C6.68342 14.0976 7.31658 14.0976 7.70711 13.7071L6.29289 12.2929ZM7.70711 0.292893C7.31658 -0.0976315 6.68342 -0.0976315 6.29289 0.292893C5.90237 0.683417 5.90237 1.31658 6.29289 1.70711L7.70711 0.292893ZM1 6C0.447715 6 0 6.44772 0 7C0 7.55228 0.447715 8 1 8L1 6ZM12.2929 6.29289L6.29289 12.2929L7.70711 13.7071L13.7071 7.70711L12.2929 6.29289ZM6.29289 1.70711L12.2929 7.70711L13.7071 6.29289L7.70711 0.292893L6.29289 1.70711ZM1 8H13V6L1 6L1 8Z"
                                    fill=""></path>
                            </svg>
                        </div>
                    </button>
                    <button class="btn btn-rounded btn-rounded--filled-active swiper-button-next">
                        <div class="btn-rounded__img">
                            <svg width="12" height="12" viewBox="0 0 14 14" fill=""
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 7L13.7071 7.70711C14.0976 7.31658 14.0976 6.68342 13.7071 6.29289L13 7ZM6.29289 12.2929C5.90237 12.6834 5.90237 13.3166 6.29289 13.7071C6.68342 14.0976 7.31658 14.0976 7.70711 13.7071L6.29289 12.2929ZM7.70711 0.292893C7.31658 -0.0976315 6.68342 -0.0976315 6.29289 0.292893C5.90237 0.683417 5.90237 1.31658 6.29289 1.70711L7.70711 0.292893ZM1 6C0.447715 6 0 6.44772 0 7C0 7.55228 0.447715 8 1 8L1 6ZM12.2929 6.29289L6.29289 12.2929L7.70711 13.7071L13.7071 7.70711L12.2929 6.29289ZM6.29289 1.70711L12.2929 7.70711L13.7071 6.29289L7.70711 0.292893L6.29289 1.70711ZM1 8H13V6L1 6L1 8Z"
                                    fill=""></path>
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div class="slider-wrapper swiper-wrapper">
            <div class="slider-card swiper-slide"><a class="slider-card__link" href="/product.html"> <img
                        class="slider-img" src="/images/sliders/main/1.png" alt="slider image 1"></a>
                <div class="slider-card__content">
                    <div class="slider-card__title">Кетчуп «Томатный „Кубаночка“ 310 г. дойпак 1/20</div>
                    <div class="slider-card__bottom">
                        <div class="slider-card__price">
                            <div class="slider-card__old-price">55,90 ₽</div>
                            <div class="slider-card__new-price">42,30 ₽</div>
                        </div>
                        <div class="slider-card__icon">
                            <button class="btn btn-rounded">
                                <div class="btn-rounded__img">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M3 6H21" stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-card swiper-slide"><a class="slider-card__link" href="/product.html"> <img
                        class="slider-img" src="/images/sliders/main/2.png" alt="slider image 1"></a>
                <div class="slider-card__content">
                    <div class="slider-card__title">Кетчуп «Томатный „Кубаночка“ 310 г. дойпак 1/20</div>
                    <div class="slider-card__bottom">
                        <div class="slider-card__price">
                            <div class="slider-card__old-price">55,90 ₽</div>
                            <div class="slider-card__new-price">42,30 ₽</div>
                        </div>
                        <div class="slider-card__icon">
                            <button class="btn btn-rounded">
                                <div class="btn-rounded__img">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M3 6H21" stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-card swiper-slide"><a class="slider-card__link" href="/product.html"> <img
                        class="slider-img" src="/images/sliders/main/3.png" alt="slider image 1"></a>
                <div class="slider-card__content">
                    <div class="slider-card__title">Кетчуп «Томатный „Кубаночка“ 310 г. дойпак 1/20</div>
                    <div class="slider-card__bottom">
                        <div class="slider-card__price">
                            <div class="slider-card__old-price">55,90 ₽</div>
                            <div class="slider-card__new-price">42,30 ₽</div>
                        </div>
                        <div class="slider-card__icon">
                            <button class="btn btn-rounded">
                                <div class="btn-rounded__img">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M3 6H21" stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-card swiper-slide"><a class="slider-card__link" href="/product.html"> <img
                        class="slider-img" src="/images/sliders/main/4.png" alt="slider image 1"></a>
                <div class="slider-card__content">
                    <div class="slider-card__title">Кетчуп «Томатный „Кубаночка“ 310 г. дойпак 1/20</div>
                    <div class="slider-card__bottom">
                        <div class="slider-card__price">
                            <div class="slider-card__old-price">55,90 ₽</div>
                            <div class="slider-card__new-price">42,30 ₽</div>
                        </div>
                        <div class="slider-card__icon">
                            <button class="btn btn-rounded">
                                <div class="btn-rounded__img">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M3 6H21" stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-card swiper-slide"><a class="slider-card__link" href="/product.html"> <img
                        class="slider-img" src="/images/sliders/main/5.png" alt="slider image 1"></a>
                <div class="slider-card__content">
                    <div class="slider-card__title">Кетчуп «Томатный „Кубаночка“ 310 г. дойпак 1/20</div>
                    <div class="slider-card__bottom">
                        <div class="slider-card__price">
                            <div class="slider-card__old-price">55,90 ₽</div>
                            <div class="slider-card__new-price">42,30 ₽</div>
                        </div>
                        <div class="slider-card__icon">
                            <button class="btn btn-rounded">
                                <div class="btn-rounded__img">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M3 6H21" stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-card swiper-slide"><a class="slider-card__link" href="/product.html"> <img
                        class="slider-img" src="/images/sliders/main/6.png" alt="slider image 1"></a>
                <div class="slider-card__content">
                    <div class="slider-card__title">Кетчуп «Томатный „Кубаночка“ 310 г. дойпак 1/20</div>
                    <div class="slider-card__bottom">
                        <div class="slider-card__price">
                            <div class="slider-card__old-price">55,90 ₽</div>
                            <div class="slider-card__new-price">42,30 ₽</div>
                        </div>
                        <div class="slider-card__icon">
                            <button class="btn btn-rounded">
                                <div class="btn-rounded__img">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M3 6H21" stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-card swiper-slide"><a class="slider-card__link" href="/product.html"> <img
                        class="slider-img" src="/images/sliders/main/7.png" alt="slider image 1"></a>
                <div class="slider-card__content">
                    <div class="slider-card__title">Кетчуп «Томатный „Кубаночка“ 310 г. дойпак 1/20</div>
                    <div class="slider-card__bottom">
                        <div class="slider-card__price">
                            <div class="slider-card__old-price">55,90 ₽</div>
                            <div class="slider-card__new-price">42,30 ₽</div>
                        </div>
                        <div class="slider-card__icon">
                            <button class="btn btn-rounded">
                                <div class="btn-rounded__img">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M3 6H21" stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-card swiper-slide"><a class="slider-card__link" href="/product.html"> <img
                        class="slider-img" src="/images/sliders/main/8.png" alt="slider image 1"></a>
                <div class="slider-card__content">
                    <div class="slider-card__title">Кетчуп «Томатный „Кубаночка“ 310 г. дойпак 1/20</div>
                    <div class="slider-card__bottom">
                        <div class="slider-card__price">
                            <div class="slider-card__old-price">55,90 ₽</div>
                            <div class="slider-card__new-price">42,30 ₽</div>
                        </div>
                        <div class="slider-card__icon">
                            <button class="btn btn-rounded">
                                <div class="btn-rounded__img">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M3 6H21" stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-card swiper-slide"><a class="slider-card__link" href="/product.html"> <img
                        class="slider-img" src="/images/sliders/main/9.png" alt="slider image 1"></a>
                <div class="slider-card__content">
                    <div class="slider-card__title">Кетчуп «Томатный „Кубаночка“ 310 г. дойпак 1/20</div>
                    <div class="slider-card__bottom">
                        <div class="slider-card__price">
                            <div class="slider-card__old-price">55,90 ₽</div>
                            <div class="slider-card__new-price">42,30 ₽</div>
                        </div>
                        <div class="slider-card__icon">
                            <button class="btn btn-rounded">
                                <div class="btn-rounded__img">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M3 6H21" stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-card swiper-slide"><a class="slider-card__link" href="/product.html"> <img
                        class="slider-img" src="/images/sliders/main/9.png" alt="slider image 1"></a>
                <div class="slider-card__content">
                    <div class="slider-card__title">Кетчуп «Томатный „Кубаночка“ 310 г. дойпак 1/20</div>
                    <div class="slider-card__bottom">
                        <div class="slider-card__price">
                            <div class="slider-card__old-price">55,90 ₽</div>
                            <div class="slider-card__new-price">42,30 ₽</div>
                        </div>
                        <div class="slider-card__icon">
                            <button class="btn btn-rounded">
                                <div class="btn-rounded__img">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M3 6H21" stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-card swiper-slide"><a class="slider-card__link" href="/product.html"> <img
                        class="slider-img" src="/images/sliders/main/9.png" alt="slider image 1"></a>
                <div class="slider-card__content">
                    <div class="slider-card__title">Кетчуп «Томатный „Кубаночка“ 310 г. дойпак 1/20</div>
                    <div class="slider-card__bottom">
                        <div class="slider-card__price">
                            <div class="slider-card__old-price">55,90 ₽</div>
                            <div class="slider-card__new-price">42,30 ₽</div>
                        </div>
                        <div class="slider-card__icon">
                            <button class="btn btn-rounded">
                                <div class="btn-rounded__img">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M3 6H21" stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section section-main">
        <div class="swiper section-slider__main">
            <div class="swiper-wrapper">
                <div class="section-slider swiper-slide">
                    <div class="container">
                        <div class="section__info">
                            <div class="section__info-content">
                                <div class="section__info-price title-1">250 ₽/шт</div>
                                <div class="section__info-title title-2">Корнишоны «Кубаночка»</div>
                                <div class="section__info-subtitle">(1-3 см) 680 г. 1/8</div>
                                <div class="section__info-text">
                                    Корнишоны "Кубаночка" настоящая находка. Огурчики упругие, довольно
                                    плотные, очень хрустящие. Рассол
                                    в меру пряный с низким содержанием
                                    уксуса. Отлично влияют на пищеварение, повышают аппетит. Среди
                                    составляющих огурцов есть калий, который необходим
                                    для нормальной
                                    работоспособности мышц сердца
                                    и почек.
                                </div>
                                <div class="section__info-btns">
                                    <button class="btn">В Корзину</button>
                                    <button class="btn btn-outlined">Подробнее</button>
                                </div>
                            </div>
                            <div class="section__info-image-adaptive"><img
                                    src="/images/section/section-main/1-big.png" alt=""></div>
                            <div class="section-slider__main-images section__info-images">
                                <div class="section__info-bg">
                                    <div class="section__info-line">
                                        <div class="section__info-pictures"><a class="section__info-pictures-wrapper"
                                                href="#"><img class="section__info-picture"
                                                    src="/images/section/section-main/pic1.png" alt=""></a><a
                                                class="section__info-pictures-wrapper" href="#"><img
                                                    class="section__info-picture"
                                                    src="/images/section/section-main/pic2.png" alt=""></a><a
                                                class="section__info-pictures-wrapper" href="#"><img
                                                    class="section__info-picture"
                                                    src="/images/section/section-main/pic3.png" alt=""></a><a
                                                class="section__info-pictures-wrapper" href="#"><img
                                                    class="section__info-picture"
                                                    src="/images/section/section-main/pic4.png" alt=""></a><a
                                                class="section__info-pictures-wrapper" href="#"><img
                                                    class="section__info-picture"
                                                    src="/images/section/section-main/pic5.png" alt=""></a>
                                        </div>
                                        <div class="section__info-dashed">
                                            <svg width="550" height="303" viewBox="0 0 550 303" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="281" cy="281" r="280" stroke="#82BA01"
                                                    stroke-width="2" stroke-dasharray="10 20"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="section__info-wrapper"><img class="section__info-img"
                                        src="/images/section/section-main/1.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-slider swiper-slide">
                    <div class="container">
                        <div class="section__info">
                            <div class="section__info-content">
                                <div class="section__info-price title-1">250 ₽/шт</div>
                                <div class="section__info-title title-2">Корнишоны «Кубаночка»</div>
                                <div class="section__info-subtitle">(1-3 см) 680 г. 1/8</div>
                                <div class="section__info-text">
                                    Корнишоны "Кубаночка" настоящая находка. Огурчики упругие, довольно
                                    плотные, очень хрустящие. Рассол
                                    в меру пряный с низким содержанием
                                    уксуса. Отлично влияют на пищеварение, повышают аппетит. Среди
                                    составляющих огурцов есть калий, который необходим
                                    для нормальной
                                    работоспособности мышц сердца
                                    и почек.
                                </div>
                                <div class="section__info-btns">
                                    <button class="btn">В Корзину</button>
                                    <button class="btn btn-outlined">Подробнее</button>
                                </div>
                            </div>
                            <div class="section__info-images">
                                <div class="section__info-bg">
                                    <div class="section__info-line">
                                        <div class="section__info-pictures"><a class="section__info-pictures-wrapper"
                                                href="#"><img class="section__info-picture"
                                                    src="/images/section/section-main/pic1.png" alt=""></a><a
                                                class="section__info-pictures-wrapper" href="#"><img
                                                    class="section__info-picture"
                                                    src="/images/section/section-main/pic2.png" alt=""></a><a
                                                class="section__info-pictures-wrapper" href="#"><img
                                                    class="section__info-picture"
                                                    src="/images/section/section-main/pic3.png" alt=""></a><a
                                                class="section__info-pictures-wrapper" href="#"><img
                                                    class="section__info-picture"
                                                    src="/images/section/section-main/pic4.png" alt=""></a><a
                                                class="section__info-pictures-wrapper" href="#"><img
                                                    class="section__info-picture"
                                                    src="/images/section/section-main/pic5.png" alt=""></a>
                                        </div>
                                        <div class="section__info-dashed">
                                            <svg width="550" height="303" viewBox="0 0 550 303" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="281" cy="281" r="280" stroke="#82BA01"
                                                    stroke-width="2" stroke-dasharray="10 20"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="section__info-wrapper"><img class="section__info-img"
                                        src="/images/section/section-main/1.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section__info-slider-buttons">
                <button class="btn btn-rounded btn-rounded--filled-active btn-prev-1">
                    <div class="btn-rounded__img">
                        <svg width="12" height="12" viewBox="0 0 14 14" fill=""
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13 7L13.7071 7.70711C14.0976 7.31658 14.0976 6.68342 13.7071 6.29289L13 7ZM6.29289 12.2929C5.90237 12.6834 5.90237 13.3166 6.29289 13.7071C6.68342 14.0976 7.31658 14.0976 7.70711 13.7071L6.29289 12.2929ZM7.70711 0.292893C7.31658 -0.0976315 6.68342 -0.0976315 6.29289 0.292893C5.90237 0.683417 5.90237 1.31658 6.29289 1.70711L7.70711 0.292893ZM1 6C0.447715 6 0 6.44772 0 7C0 7.55228 0.447715 8 1 8L1 6ZM12.2929 6.29289L6.29289 12.2929L7.70711 13.7071L13.7071 7.70711L12.2929 6.29289ZM6.29289 1.70711L12.2929 7.70711L13.7071 6.29289L7.70711 0.292893L6.29289 1.70711ZM1 8H13V6L1 6L1 8Z"
                                fill=""></path>
                        </svg>
                    </div>
                </button>
                <button class="btn btn-rounded btn-rounded--filled-active btn-next-1">
                    <div class="btn-rounded__img">
                        <svg width="12" height="12" viewBox="0 0 14 14" fill=""
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13 7L13.7071 7.70711C14.0976 7.31658 14.0976 6.68342 13.7071 6.29289L13 7ZM6.29289 12.2929C5.90237 12.6834 5.90237 13.3166 6.29289 13.7071C6.68342 14.0976 7.31658 14.0976 7.70711 13.7071L6.29289 12.2929ZM7.70711 0.292893C7.31658 -0.0976315 6.68342 -0.0976315 6.29289 0.292893C5.90237 0.683417 5.90237 1.31658 6.29289 1.70711L7.70711 0.292893ZM1 6C0.447715 6 0 6.44772 0 7C0 7.55228 0.447715 8 1 8L1 6ZM12.2929 6.29289L6.29289 12.2929L7.70711 13.7071L13.7071 7.70711L12.2929 6.29289ZM6.29289 1.70711L12.2929 7.70711L13.7071 6.29289L7.70711 0.292893L6.29289 1.70711ZM1 8H13V6L1 6L1 8Z"
                                fill=""></path>
                        </svg>
                    </div>
                </button>
            </div>
        </div>
    </section>
    <section class="section section-categories">
        <div class="container">
            <div class="section__title">
                <div class="title-2">Популярные категории</div><a class="link" href="/catalog.html">Смотреть
                    все</a>
            </div>
            <div class="section-categories__slider swiper">
                <div class="swiper-wrapper">
                    <div class="category-card swiper-slide">
                        <div class="category-card__picture"><img class="category-card__img"
                                src="/images/categories/1.jpg" alt="category 1"></div>
                        <div class="category-card__content">
                            <div class="category-card__title title-4">Молочная продукция</div>
                        </div>
                    </div>
                    <div class="category-card swiper-slide">
                        <div class="category-card__picture"><img class="category-card__img"
                                src="/images/categories/2.jpg" alt="category 2"></div>
                        <div class="category-card__content">
                            <div class="category-card__title title-4">Мясная продукция</div>
                        </div>
                    </div>
                    <div class="category-card swiper-slide">
                        <div class="category-card__picture"><img class="category-card__img"
                                src="/images/categories/3.jpg" alt="category 3"></div>
                        <div class="category-card__content">
                            <div class="category-card__title title-4">Овощи</div>
                        </div>
                    </div>
                    <div class="category-card swiper-slide">
                        <div class="category-card__picture"><img class="category-card__img"
                                src="/images/categories/4.jpg" alt="category 4"></div>
                        <div class="category-card__content">
                            <div class="category-card__title title-4">Ягоды</div>
                        </div>
                    </div>
                    <div class="category-card swiper-slide">
                        <div class="category-card__picture"><img class="category-card__img"
                                src="/images/categories/1.jpg" alt="category 5"></div>
                        <div class="category-card__content">
                            <div class="category-card__title title-4">Молочная продукция</div>
                        </div>
                    </div>
                    <div class="category-card swiper-slide">
                        <div class="category-card__picture"><img class="category-card__img"
                                src="/images/categories/2.jpg" alt="category 6"></div>
                        <div class="category-card__content">
                            <div class="category-card__title title-4">Мясная продукция</div>
                        </div>
                    </div>
                    <div class="category-card swiper-slide">
                        <div class="category-card__picture"><img class="category-card__img"
                                src="/images/categories/3.jpg" alt="category 7"></div>
                        <div class="category-card__content">
                            <div class="category-card__title title-4">Овощи</div>
                        </div>
                    </div>
                    <div class="category-card swiper-slide">
                        <div class="category-card__picture"><img class="category-card__img"
                                src="/images/categories/4.jpg" alt="category 8"></div>
                        <div class="category-card__content">
                            <div class="category-card__title title-4">Ягоды</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-scrollbar swiper-scrollbar-category"></div>
            </div>
        </div>
    </section>
    <section class="section section-promotional">
        <div class="container">
            <div class="section__title mb-5">
                <div class="title-2">Акционные товары</div>
                <div class="link">Смотреть все</div>
            </div>
            <div class="swiper section-promotional__slider">
                <div class="swiper-wrapper">
                    <div class="section-promotional__slide section__info swiper-slide">
                        <div class="section__info-content">
                            <div class="section__info-content">
                                <div class="section__info-title title-3">Малина свежемороженая</div>
                                <div class="section__info-text">
                                    Малина – очень вкусная и ароматная ягода. Она обладает жаропонижающим и
                                    противовоспалительным эффектом, богата железом, медью и витаминами А, Е, РР, В2.
                                    На производстве используется технология шоковой заморозки, что позволяет сохранить
                                    вкус,
                                    аромат и пользу свежих ягод.
                                    В свежем виде эта ягода – настоящее лакомство. Кроме того
                                    с ней можно готовить различные десерты и пироги.
                                </div>
                                <div class="section__info-price title-1">250 ₽/шт<span
                                        class="section__info-price-old title-3">350 ₽/шт</span></div>
                                <div class="section__info-btns">
                                    <button class="btn">В Корзину</button>
                                    <button class="btn btn-outlined">Подробнее</button>
                                </div>
                                <div class="section__info-slider-buttons"></div>
                            </div>
                        </div>
                        <div class="section__info-images"><img class="section__info-img"
                                src="/images/section/section-main/promotional.jpg"></div>
                    </div>
                    <div class="section__info swiper-slide">
                        <div class="section__info-content">
                            <div class="section__info-content">
                                <div class="section__info-title title-3">Малина свежемороженая</div>
                                <div class="section__info-text">
                                    Малина – очень вкусная и ароматная ягода. Она обладает жаропонижающим и
                                    противовоспалительным эффектом, богата железом, медью и витаминами А, Е, РР, В2.
                                    На производстве используется технология шоковой заморозки, что позволяет сохранить
                                    вкус,
                                    аромат и пользу свежих ягод.
                                    В свежем виде эта ягода – настоящее лакомство. Кроме того
                                    с ней можно готовить различные десерты и пироги.
                                </div>
                                <div class="section__info-price title-1">250 ₽/шт<span
                                        class="section__info-price-old title-3">350 ₽/шт</span></div>
                                <div class="section__info-btns">
                                    <button class="btn">В Корзину</button>
                                    <button class="btn btn-outlined">Подробнее</button>
                                </div>
                                <div class="section__info-slider-buttons"></div>
                            </div>
                        </div>
                        <div class="section__info-images"><img class="section__info-img"
                                src="/images/section/section-main/promotional.jpg"></div>
                    </div>
                    <div class="section__info swiper-slide">
                        <div class="section__info-content">
                            <div class="section__info-content">
                                <div class="section__info-title title-3">Малина свежемороженая</div>
                                <div class="section__info-text">
                                    Малина – очень вкусная и ароматная ягода. Она обладает жаропонижающим и
                                    противовоспалительным эффектом, богата железом, медью и витаминами А, Е, РР, В2.
                                    На производстве используется технология шоковой заморозки, что позволяет сохранить
                                    вкус,
                                    аромат и пользу свежих ягод.
                                    В свежем виде эта ягода – настоящее лакомство. Кроме того
                                    с ней можно готовить различные десерты и пироги.
                                </div>
                                <div class="section__info-price title-1">250 ₽/шт<span
                                        class="section__info-price-old title-3">350 ₽/шт</span></div>
                                <div class="section__info-btns">
                                    <button class="btn">В Корзину</button>
                                    <button class="btn btn-outlined">Подробнее</button>
                                </div>
                                <div class="section__info-slider-buttons"></div>
                            </div>
                        </div>
                        <div class="section__info-images"><img class="section__info-img"
                                src="/images/section/section-main/promotional.jpg"></div>
                    </div>
                    <div class="section__info swiper-slide">
                        <div class="section__info-content">
                            <div class="section__info-content">
                                <div class="section__info-title title-3">Малина свежемороженая</div>
                                <div class="section__info-text">
                                    Малина – очень вкусная и ароматная ягода. Она обладает жаропонижающим и
                                    противовоспалительным эффектом, богата железом, медью и витаминами А, Е, РР, В2.
                                    На производстве используется технология шоковой заморозки, что позволяет сохранить
                                    вкус,
                                    аромат и пользу свежих ягод.
                                    В свежем виде эта ягода – настоящее лакомство. Кроме того
                                    с ней можно готовить различные десерты и пироги.
                                </div>
                                <div class="section__info-price title-1">250 ₽/шт<span
                                        class="section__info-price-old title-3">350 ₽/шт</span></div>
                                <div class="section__info-btns">
                                    <button class="btn">В Корзину</button>
                                    <button class="btn btn-outlined">Подробнее</button>
                                </div>
                                <div class="section__info-slider-buttons"></div>
                            </div>
                        </div>
                        <div class="section__info-images"><img class="section__info-img"
                                src="/images/section/section-main/promotional.jpg"></div>
                    </div>
                </div>
                <div class="section-promotional__btns swiper-buttons">
                    <button
                        class="section-promotional__btn swiper-button-prev btn btn-rounded btn-rounded--filled-active">
                        <div class="btn-rounded__img">
                            <svg width="12" height="12" viewBox="0 0 14 14" fill=""
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 7L13.7071 7.70711C14.0976 7.31658 14.0976 6.68342 13.7071 6.29289L13 7ZM6.29289 12.2929C5.90237 12.6834 5.90237 13.3166 6.29289 13.7071C6.68342 14.0976 7.31658 14.0976 7.70711 13.7071L6.29289 12.2929ZM7.70711 0.292893C7.31658 -0.0976315 6.68342 -0.0976315 6.29289 0.292893C5.90237 0.683417 5.90237 1.31658 6.29289 1.70711L7.70711 0.292893ZM1 6C0.447715 6 0 6.44772 0 7C0 7.55228 0.447715 8 1 8L1 6ZM12.2929 6.29289L6.29289 12.2929L7.70711 13.7071L13.7071 7.70711L12.2929 6.29289ZM6.29289 1.70711L12.2929 7.70711L13.7071 6.29289L7.70711 0.292893L6.29289 1.70711ZM1 8H13V6L1 6L1 8Z"
                                    fill=""></path>
                            </svg>
                        </div>
                    </button>
                    <div class="section-promotional__pagination swiper-pagination"></div>
                    <button
                        class="section-promotional__btn swiper-button-next btn btn-rounded btn-rounded--filled-active">
                        <div class="btn-rounded__img">
                            <svg width="12" height="12" viewBox="0 0 14 14" fill=""
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 7L13.7071 7.70711C14.0976 7.31658 14.0976 6.68342 13.7071 6.29289L13 7ZM6.29289 12.2929C5.90237 12.6834 5.90237 13.3166 6.29289 13.7071C6.68342 14.0976 7.31658 14.0976 7.70711 13.7071L6.29289 12.2929ZM7.70711 0.292893C7.31658 -0.0976315 6.68342 -0.0976315 6.29289 0.292893C5.90237 0.683417 5.90237 1.31658 6.29289 1.70711L7.70711 0.292893ZM1 6C0.447715 6 0 6.44772 0 7C0 7.55228 0.447715 8 1 8L1 6ZM12.2929 6.29289L6.29289 12.2929L7.70711 13.7071L13.7071 7.70711L12.2929 6.29289ZM6.29289 1.70711L12.2929 7.70711L13.7071 6.29289L7.70711 0.292893L6.29289 1.70711ZM1 8H13V6L1 6L1 8Z"
                                    fill=""></path>
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-about">
        <div class="container">
            <div class="section__title mb-5">
                <div class="title-2">О компании</div>
            </div>
            <div class="section-about__content">
                <div class="section-about__left">
                    <div class="section-about__text text">
                        Ясность нашей позиции очевидна:&nbsp;укрепление и развитие внутренней
                        структуры обеспечивает широкому кругу (специалистов) участие в
                        формировании модели развития. Экономическая повестка сегодняшнего
                        дня прекрасно подходит для реализации экономической целесообразности
                        принимаемых решений.
                        Как принято считать, предприниматели в сети интернет формируют
                        глобальную экономическую сеть и при этом - разоблачены!
                    </div>
                </div>
                <div class="section-about__right">
                    <div class="about-card"><img class="about-card__img" src="/images/section/section-about/1.svg"
                            alt="">
                        <div class="about-card__title text-small-bold">Оптовые цены</div>
                    </div>
                    <div class="about-card"><img class="about-card__img" src="/images/section/section-about/2.svg"
                            alt="">
                        <div class="about-card__title text-small-bold">Доставка по городу и краю</div>
                    </div>
                    <div class="about-card"><img class="about-card__img" src="/images/section/section-about/3.svg"
                            alt="">
                        <div class="about-card__title text-small-bold">15 лет на рынке</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-news">
        <div class="container">
            <div class="section__title mb-5">
                <div class="title-2">Новости</div><a class="link" href="/news.html">Все новости</a>
            </div>
            <div class="section-news__slider swiper">
                <div class="swiper-wrapper">
                    <div class="news-card swiper-slide"><a class="news-card__img-wrapper" href="#"><img
                                class="news-card__img" src="/images/section/section-news/1.jpg"></a>
                        <div class="news-card__content">
                            <div class="news-card__date text-small">15.12.2021</div>
                            <div class="news-card__title title-4">«Самое ценное в нашем мире — овощи»</div>
                        </div>
                    </div>
                    <div class="news-card swiper-slide"><a class="news-card__img-wrapper" href="#"><img
                                class="news-card__img" src="/images/section/section-news/2.jpg"></a>
                        <div class="news-card__content">
                            <div class="news-card__date text-small">15.12.2021</div>
                            <div class="news-card__title title-4">Чувсто вкуса</div>
                        </div>
                    </div>
                    <div class="news-card swiper-slide"><a class="news-card__img-wrapper" href="#"><img
                                class="news-card__img" src="/images/section/section-news/3.jpg"></a>
                        <div class="news-card__content">
                            <div class="news-card__date text-small">15.12.2021</div>
                            <div class="news-card__title title-4">“TDA” установила новый мировой рекорд Гиннесса</div>
                        </div>
                    </div>
                    <div class="news-card swiper-slide"><a class="news-card__img-wrapper" href="#"><img
                                class="news-card__img" src="/images/section/section-news/2.jpg"></a>
                        <div class="news-card__content">
                            <div class="news-card__date text-small">15.12.2021</div>
                            <div class="news-card__title title-4">Чувсто вкуса</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-scrollbar swiper-scrollbar-news"></div>
            </div>
        </div>
    </section>
</main>
@endsection
