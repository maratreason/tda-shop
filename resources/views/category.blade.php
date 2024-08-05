<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="/css/swiper.bundle.min.css" rel="stylesheet">
    <link href="/css/main.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>TDA</title>
</head>

<body id="top">
    <header class="header">
        <div class="header-wrapper">
            <div class="container">
                <div class="header__top"><a class="header__top-logo logo" href="/">
                        <svg width="100" height="35" viewBox="0 0 100 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.9428 0V6.83049H17.7138V35H9.22902V6.83049H0V0H26.9428Z" fill="#82BA01"></path>
                            <path
                                d="M44.2507 0C47.9224 0 51.1311 0.731244 53.8766 2.19373C56.6222 3.65622 58.7392 5.717 60.2278 8.37607C61.7494 11.0019 62.5102 14.0432 62.5102 17.5C62.5102 20.9236 61.7494 23.9649 60.2278 26.6239C58.7392 29.283 56.6056 31.3438 53.827 32.8063C51.0815 34.2688 47.8893 35 44.2507 35H31.201V0H44.2507ZM43.7049 27.6211C46.9135 27.6211 49.411 26.7403 51.1972 24.9786C52.9835 23.217 53.8766 20.7241 53.8766 17.5C53.8766 14.2759 52.9835 11.7664 51.1972 9.97151C49.411 8.17664 46.9135 7.2792 43.7049 7.2792H39.6858V27.6211H43.7049Z"
                                fill="#82BA01"></path>
                            <path
                                d="M88.9351 28.8177H75.9351L73.8511 35H64.9694L77.5725 0H87.3969L100 35H91.0191L88.9351 28.8177ZM86.7519 22.2365L82.4351 9.42308L78.1679 22.2365H86.7519Z"
                                fill="#82BA01"></path>
                        </svg></a>
                    <div class="header__top-search search-input">
                        <input type="text" placeholder="Поиск">
                        <button class="search-input__btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 17C15.4183 17 19 13.4183 19 9C19 4.58172 15.4183 1 11 1C6.58172 1 3 4.58172 3 9C3 13.4183 6.58172 17 11 17Z"
                                    stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path d="M21.0004 18.9999L16.6504 14.6499" stroke="" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="header__top-city">
                        <div class="top__icon">
                            <button class="btn btn-rounded">
                                <div class="btn-rounded__img">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 10L20 1L11 20L9 12L1 10Z" stroke="" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                        <div class="top__text">
                            <div class="city__label">Выберите филиал:</div>
                            <div class="city__select">г. Владивосток</div>
                        </div>
                    </div>
                    <div class="header__top-phone">
                        <div class="top__icon">
                            <button class="btn btn-rounded">
                                <div class="btn-rounded__img">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.0001 15.92V18.92C21.0012 19.1985 20.9441 19.4741 20.8326 19.7293C20.721 19.9845 20.5574 20.2136 20.3521 20.4018C20.1469 20.5901 19.9046 20.7335 19.6408 20.8227C19.377 20.9119 19.0974 20.945 18.8201 20.92C15.7429 20.5856 12.7871 19.5341 10.1901 17.85C7.77388 16.3146 5.72539 14.2661 4.19006 11.85C2.50003 9.24118 1.4483 6.27097 1.12006 3.17997C1.09507 2.90344 1.12793 2.62474 1.21656 2.3616C1.30518 2.09846 1.44763 1.85666 1.63482 1.6516C1.82202 1.44653 2.04986 1.28268 2.30385 1.1705C2.55783 1.05831 2.8324 1.00024 3.11006 0.999975H6.11006C6.59536 0.995198 7.06585 1.16705 7.43382 1.48351C7.80179 1.79996 8.04213 2.23942 8.11005 2.71997C8.23668 3.68004 8.47151 4.6227 8.81006 5.52997C8.9446 5.8879 8.97372 6.27689 8.89396 6.65086C8.81421 7.02482 8.62892 7.36809 8.36005 7.63998L7.09006 8.90997C8.51361 11.4135 10.5865 13.4864 13.0901 14.91L14.3601 13.64C14.6319 13.3711 14.9752 13.1858 15.3492 13.1061C15.7231 13.0263 16.1121 13.0554 16.4701 13.19C17.3773 13.5285 18.32 13.7634 19.2801 13.89C19.7658 13.9585 20.2095 14.2032 20.5266 14.5775C20.8437 14.9518 21.0122 15.4296 21.0001 15.92Z"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                        <div class="top__text">
                            <div class="top__phone">+7 (123) 456-78-90</div>
                            <div class="top__phone">+7 (123) 456-78-90</div>
                        </div>
                    </div>
                    <div class="header__top-btn">
                        <button class="btn btn-dropdown btn-shadow">
                            <div class="btn-dropdown__icon"><img src="/images/icons/envelope.svg" alt=""></div>
                            <div class="btn-dropdown__text">Написать нам</div>
                        </button>
                    </div>
                    <div class="header__top-buttons">
                        <button class="btn btn-rounded">
                            <div class="btn-badge">2</div>
                            <div class="btn-rounded__img">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                                        stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                    <path d="M3 6H21" stroke="" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                                        stroke="" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </button>
                        <button class="btn btn-rounded">
                            <div class="btn-rounded__img">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V9L13 2Z"
                                        stroke="" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M13 2V9H20" stroke="" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </button>
                        <button class="btn btn-rounded">
                            <div class="btn-rounded__img">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M26.6666 28V25.3333C26.6666 23.9188 26.1047 22.5623 25.1045 21.5621C24.1043 20.5619 22.7477 20 21.3333 20H10.6666C9.2521 20 7.89554 20.5619 6.89535 21.5621C5.89515 22.5623 5.33325 23.9188 5.33325 25.3333V28"
                                        stroke="" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M16.0001 14.6667C18.9456 14.6667 21.3334 12.2789 21.3334 9.33333C21.3334 6.38781 18.9456 4 16.0001 4C13.0546 4 10.6667 6.38781 10.6667 9.33333C10.6667 12.2789 13.0546 14.6667 16.0001 14.6667Z"
                                        stroke="" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="header__bottom">
                <div class="container">
                    <div class="header__bottom-menu">
                        <div class="header__bottom-btn">
                            <button class="btn btn-dropdown" data-catalog-btn="true" style="width: 190px">
                                <div class="btn-dropdown__icon" data-btn-dropdown><img src="/images/icons/list.svg"
                                        alt=""></div>
                                <div class="btn-dropdown__text">Каталог</div>
                            </button>
                        </div>
                        <ul class="header__bottom-list">
                            <li class="header__bottom-item"><a class="header__bottom-link"
                                    href="/catalog-detail.html">Молочная продукция</a></li>
                            <li class="header__bottom-item"><a class="header__bottom-link"
                                    href="/catalog-detail.html">Мясная продукция</a></li>
                            <li class="header__bottom-item"><a class="header__bottom-link"
                                    href="/catalog-detail.html">Напитки</a></li>
                            <li class="header__bottom-item"><a class="header__bottom-link"
                                    href="/catalog-detail.html">Бакалея</a></li>
                            <li class="header__bottom-item"><a class="header__bottom-link"
                                    href="/catalog-detail.html">Грибы</a></li>
                            <li class="header__bottom-item"><a class="header__bottom-link"
                                    href="/catalog-detail.html">Крупы</a></li>
                            <li class="header__bottom-item"><a class="header__bottom-link"
                                    href="/catalog-detail.html">Овощи</a></li>
                            <li class="header__bottom-item"><a class="header__bottom-link"
                                    href="/catalog-detail.html">Ягоды</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="catalog-menu" data-catalog-menu>
                <div class="container">
                    <div class="sitebar-wrapper">
                        <div class="sitebar sitebar-menu">
                            <div class="catalog-menu__accordion" data-accordion>
                                <div class="sitebar__box">
                                    <div class="sitebar__title accordion__title title-4">Новинки</div>
                                </div>
                                <div class="sitebar__box">
                                    <div class="sitebar__title accordion__title title-4">Овощи, фрукты, ягоды, зелень,
                                        грибы</div>
                                </div>
                                <div class="sitebar__box">
                                    <div class="sitebar__title accordion__title title-4">Кулинария</div>
                                </div>
                                <div class="sitebar__box">
                                    <div class="sitebar__title accordion__title title-4">Молоко, сыр, яйцо</div>
                                </div>
                                <div class="sitebar__box">
                                    <div class="sitebar__title accordion__title title-4">Мясо, птица, колбасы</div>
                                </div>
                                <div class="sitebar__box">
                                    <div class="sitebar__title accordion__title title-4">Рыба, икра, морепродукты</div>
                                </div>
                                <div class="sitebar__box">
                                    <div class="sitebar__title sitebar__title--active accordion__title title-4">Крупы,
                                        масло, консервы, соусы, орехи</div>
                                </div>
                                <div class="sitebar__box">
                                    <div class="sitebar__title accordion__title title-4">Вода,соки, напитки</div>
                                </div>
                                <div class="sitebar__box">
                                    <div class="sitebar__title accordion__title title-4">Новинки</div>
                                </div>
                                <div class="sitebar__box">
                                    <div class="sitebar__title accordion__title title-4">Овощи, фрукты, ягоды, зелень,
                                        грибы</div>
                                </div>
                                <div class="sitebar__box">
                                    <div class="sitebar__title accordion__title title-4">Кулинария</div>
                                </div>
                                <div class="sitebar__box">
                                    <div class="sitebar__title accordion__title title-4">Молоко, сыр, яйцо</div>
                                </div>
                                <div class="sitebar__box">
                                    <div class="sitebar__title accordion__title title-4">Мясо, птица, колбасы</div>
                                </div>
                                <div class="sitebar__box">
                                    <div class="sitebar__title accordion__title title-4">Рыба, икра, морепродукты</div>
                                </div>
                                <div class="sitebar__box">
                                    <div class="sitebar__title accordion__title title-4">Крупы, масло, консервы, соусы,
                                        орехи</div>
                                </div>
                                <div class="sitebar__box">
                                    <div class="sitebar__title accordion__title title-4">Вода,соки, напитки</div>
                                </div>
                            </div>
                        </div>
                        <div class="sitebar-content">
                            <h1 class="title-2">Крупы, масло, консервы, соусы, орехи</h1>
                            <div class="sitebar-content__wrapper">
                                <div class="sitebar-content__block">
                                    <div class="sitebar-content__title title-4">Орехи, сухофрукты, семечки</div>
                                </div>
                                <div class="sitebar-content__block">
                                    <div class="sitebar-content__title title-4">Растительное масло</div>
                                    <ul class="sitebar-content__list">
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Подсолнечное</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Оливковое</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Льняное</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Кукурузное</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Тыквенное</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Другие масла</a></li>
                                    </ul>
                                </div>
                                <div class="sitebar-content__block">
                                    <div class="sitebar-content__title title-4">Крупы, бобовые</div>
                                    <ul class="sitebar-content__list">
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Крупы</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Бобовые</a></li>
                                    </ul>
                                </div>
                                <div class="sitebar-content__block">
                                    <div class="sitebar-content__title title-4">Макаронные изделия</div>
                                </div>
                                <div class="sitebar-content__block">
                                    <div class="sitebar-content__title title-4">Мука, всё для выпечки</div>
                                    <ul class="sitebar-content__list">
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Смеси для выпечки</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Мука</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Всё для выпечки</a></li>
                                    </ul>
                                </div>
                                <div class="sitebar-content__block">
                                    <div class="sitebar-content__title title-4">Соусы, майонез</div>
                                    <ul class="sitebar-content__list">
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Майонез</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Кетчуп, томатная паста</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Соусы</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Заправки для салата</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Горчица, хрен</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Уксус</a></li>
                                    </ul>
                                </div>
                                <div class="sitebar-content__block">
                                    <div class="sitebar-content__title title-4">Сухие завтраки, каши, хлопья</div>
                                    <ul class="sitebar-content__list">
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Сухие завтраки</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Геркулес, хлопья, отруби</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Гранола, мюсли</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Каши быстрого приготовления</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Без сахара</a></li>
                                    </ul>
                                </div>
                                <div class="sitebar-content__block">
                                    <div class="sitebar-content__title title-4">Консервы, варенье, мёд</div>
                                    <ul class="sitebar-content__list">
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Овощные, грибные</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Оливки, маслины</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Мясные</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Рыбные, морепродукты</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Готовые блюда</a></li>
                                        <li class="sitebar-content__item"><a class="sitebar-content__link"
                                                href="/catalog.html">Мёд</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="section section-catalog">
        <div class="section-menu">
            <ul class="section-menu__list">
                <li class="section-menu__item">
                    <p>1 560 ₽</p>
                    <button class="btn btn-rounded">
                        <div class="btn-badge">2</div>
                        <div class="btn-rounded__img">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 2L3 6V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6L18 2H6Z"
                                    stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path d="M3 6H21" stroke="" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10"
                                    stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </div>
                    </button>
                </li>
                <li class="section-menu__item">
                    <button class="btn btn-rounded">
                        <div class="btn-rounded__img">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V9L13 2Z"
                                    stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path d="M13 2V9H20" stroke="" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </div>
                    </button>
                </li>
                <li class="section-menu__item">
                    <button class="btn btn-rounded">
                        <div class="btn-rounded__img">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M26.6666 28V25.3333C26.6666 23.9188 26.1047 22.5623 25.1045 21.5621C24.1043 20.5619 22.7477 20 21.3333 20H10.6666C9.2521 20 7.89554 20.5619 6.89535 21.5621C5.89515 22.5623 5.33325 23.9188 5.33325 25.3333V28"
                                    stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M16.0001 14.6667C18.9456 14.6667 21.3334 12.2789 21.3334 9.33333C21.3334 6.38781 18.9456 4 16.0001 4C13.0546 4 10.6667 6.38781 10.6667 9.33333C10.6667 12.2789 13.0546 14.6667 16.0001 14.6667Z"
                                    stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </div>
                    </button>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="/">Главная</a></li>
                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="/">Каталог</a></li>
                </ul>
            </div>
            <div class="title-2 section-catalog__title">Каталог</div>
            <div class="section-catalog__cards">
                <a class="category-card" href="/molochnaya-productsiya">
                    <div class="category-card__picture">
                        <img
                            class="category-card__img"
                            src="/images/categories/1.jpg" alt="category 1"
                        >
                    </div>
                    <div class="category-card__content">
                        <div class="category-card__title title-4">Молочная продукция</div>
                    </div>
                </a>
                <a class="category-card" href="/myasnaya-productsiya">
                    <div class="category-card__picture"><img class="category-card__img"
                            src="/images/categories/2.jpg" alt="category 2"></div>
                    <div class="category-card__content">
                        <div class="category-card__title title-4">Мясная продукция</div>
                    </div>
                </a>
                <a class="category-card" href="/ovoshi">
                    <div class="category-card__picture"><img class="category-card__img"
                            src="/images/categories/3.jpg" alt="category 3"></div>
                    <div class="category-card__content">
                        <div class="category-card__title title-4">Овощи</div>
                    </div>
                </a>
                <a class="category-card" href="/yagody">
                    <div class="category-card__picture"><img class="category-card__img"
                            src="/images/categories/4.jpg" alt="category 4"></div>
                    <div class="category-card__content">
                        <div class="category-card__title title-4">Ягоды</div>
                    </div>
                </a>
                <a class="category-card" href="/catalog-detail.html">
                    <div class="category-card__picture"><img class="category-card__img"
                            src="/images/categories/1.jpg" alt="category 5"></div>
                    <div class="category-card__content">
                        <div class="category-card__title title-4">Молочная продукция</div>
                    </div>
                </a>
                <a class="category-card" href="/catalog-detail.html">
                    <div class="category-card__picture"><img class="category-card__img"
                            src="/images/categories/2.jpg" alt="category 6"></div>
                    <div class="category-card__content">
                        <div class="category-card__title title-4">Мясная продукция</div>
                    </div>
                </a>
                <a class="category-card" href="/catalog-detail.html">
                    <div class="category-card__picture"><img class="category-card__img"
                            src="/images/categories/3.jpg" alt="category 7"></div>
                    <div class="category-card__content">
                        <div class="category-card__title title-4">Овощи</div>
                    </div>
                </a>
                <a class="category-card" href="/catalog-detail.html">
                    <div class="category-card__picture"><img class="category-card__img"
                            src="/images/categories/4.jpg" alt="category 8"></div>
                    <div class="category-card__content">
                        <div class="category-card__title title-4">Ягоды</div>
                    </div>
                </a>
                <a class="category-card" href="/catalog-detail.html">
                    <div class="category-card__picture"><img class="category-card__img"
                            src="/images/categories/1.jpg" alt="category 5"></div>
                    <div class="category-card__content">
                        <div class="category-card__title title-4">Молочная продукция</div>
                    </div>
                </a>
                <a class="category-card" href="/catalog-detail.html">
                    <div class="category-card__picture"><img class="category-card__img"
                            src="/images/categories/2.jpg" alt="category 6"></div>
                    <div class="category-card__content">
                        <div class="category-card__title title-4">Мясная продукция</div>
                    </div>
                </a>
                <a class="category-card" href="/catalog-detail.html">
                    <div class="category-card__picture"><img class="category-card__img"
                            src="/images/categories/3.jpg" alt="category 7"></div>
                    <div class="category-card__content">
                        <div class="category-card__title title-4">Овощи</div>
                    </div>
                </a>
                <a class="category-card" href="/catalog-detail.html">
                    <div class="category-card__picture"><img class="category-card__img"
                            src="/images/categories/4.jpg" alt="category 8"></div>
                    <div class="category-card__content">
                        <div class="category-card__title title-4">Ягоды</div>
                    </div>
                </a></div>
            <div class="section-catalog__title section-catalog__product-title title-3">Популярные товары</div>
            <div class="swiper-catalog__products swiper">
                <div class="section-catalog__products section-catalog__slider">
                    <div class="swiper-wrapper">
                        <div class="product-card swiper-slide"><a class="product-card__img-wrapper"
                                href="/product.html"><img class="product-card__img"
                                    src="/images/products/product-1.png" alt="">
                                <div class="product-card__box">
                                    <div class="product-card__colors product-card__colors-red">-40%</div>
                                    <div class="product-card__colors product-card__colors-green">Новинка</div>
                                    <div class="product-card__colors product-card__colors-blue">Хит</div>
                                </div>
                            </a>
                            <div class="product-card__content">
                                <div class="product-card__title">Морковь мытая 0.7-1.0 кг</div>
                                <div class="product-card__old-price text-small">99,90 ₽/кг</div>
                                <div class="product-card__price title-4">59,90 ₽/кг</div>
                            </div>
                            <div class="product-card__btns">
                                <div class="product-card__count count" data-count>
                                    <button class="product-card__count-btn count-btn count-btn__minus"
                                        data-count-btn-minus="true">-</button>
                                    <div class="product-card__count-number" data-count-number>1</div>
                                    <button class="product-card__count-btn count-btn count-btn__plus"
                                        data-count-btn-plus="true">+</button>
                                </div>
                                <button class="btn btn-outlined btn-sm product-card__btn">В корзину</button>
                            </div>
                        </div>
                        <div class="product-card swiper-slide"><a class="product-card__img-wrapper"
                                href="/product.html"><img class="product-card__img"
                                    src="/images/products/product-1.png" alt="">
                                <div class="product-card__box">
                                    <div class="product-card__colors product-card__colors-red">-40%</div>
                                    <div class="product-card__colors product-card__colors-green">Новинка</div>
                                    <div class="product-card__colors product-card__colors-blue">Хит</div>
                                </div>
                            </a>
                            <div class="product-card__content">
                                <div class="product-card__title">Морковь мытая 0.7-1.0 кг</div>
                                <div class="product-card__old-price text-small">99,90 ₽/кг</div>
                                <div class="product-card__price title-4">59,90 ₽/кг</div>
                            </div>
                            <div class="product-card__btns">
                                <div class="product-card__count count" data-count>
                                    <button class="product-card__count-btn count-btn count-btn__minus"
                                        data-count-btn-minus="true">-</button>
                                    <div class="product-card__count-number" data-count-number>1</div>
                                    <button class="product-card__count-btn count-btn count-btn__plus"
                                        data-count-btn-plus="true">+</button>
                                </div>
                                <button class="btn btn-outlined btn-sm product-card__btn">В корзину</button>
                            </div>
                        </div>
                        <div class="product-card swiper-slide"><a class="product-card__img-wrapper"
                                href="/product.html"><img class="product-card__img"
                                    src="/images/products/product-1.png" alt="">
                                <div class="product-card__box">
                                    <div class="product-card__colors product-card__colors-red">-40%</div>
                                    <div class="product-card__colors product-card__colors-green">Новинка</div>
                                    <div class="product-card__colors product-card__colors-blue">Хит</div>
                                </div>
                            </a>
                            <div class="product-card__content">
                                <div class="product-card__title">Морковь мытая 0.7-1.0 кг</div>
                                <div class="product-card__old-price text-small">99,90 ₽/кг</div>
                                <div class="product-card__price title-4">59,90 ₽/кг</div>
                            </div>
                            <div class="product-card__btns">
                                <div class="product-card__count count" data-count>
                                    <button class="product-card__count-btn count-btn count-btn__minus"
                                        data-count-btn-minus="true">-</button>
                                    <div class="product-card__count-number" data-count-number>1</div>
                                    <button class="product-card__count-btn count-btn count-btn__plus"
                                        data-count-btn-plus="true">+</button>
                                </div>
                                <button class="btn btn-outlined btn-sm product-card__btn">В корзину</button>
                            </div>
                        </div>
                        <div class="product-card swiper-slide"><a class="product-card__img-wrapper"
                                href="/product.html"><img class="product-card__img"
                                    src="/images/products/product-1.png" alt="">
                                <div class="product-card__box">
                                    <div class="product-card__colors product-card__colors-red">-40%</div>
                                    <div class="product-card__colors product-card__colors-green">Новинка</div>
                                    <div class="product-card__colors product-card__colors-blue">Хит</div>
                                </div>
                            </a>
                            <div class="product-card__content">
                                <div class="product-card__title">Морковь мытая 0.7-1.0 кг</div>
                                <div class="product-card__old-price text-small">99,90 ₽/кг</div>
                                <div class="product-card__price title-4">59,90 ₽/кг</div>
                            </div>
                            <div class="product-card__btns">
                                <div class="product-card__count count" data-count>
                                    <button class="product-card__count-btn count-btn count-btn__minus"
                                        data-count-btn-minus="true">-</button>
                                    <div class="product-card__count-number" data-count-number>1</div>
                                    <button class="product-card__count-btn count-btn count-btn__plus"
                                        data-count-btn-plus="true">+</button>
                                </div>
                                <button class="btn btn-outlined btn-sm product-card__btn">В корзину</button>
                            </div>
                        </div>
                        <div class="product-card swiper-slide"><a class="product-card__img-wrapper"
                                href="/product.html"><img class="product-card__img"
                                    src="/images/products/product-1.png" alt="">
                                <div class="product-card__box">
                                    <div class="product-card__colors product-card__colors-red">-40%</div>
                                    <div class="product-card__colors product-card__colors-green">Новинка</div>
                                    <div class="product-card__colors product-card__colors-blue">Хит</div>
                                </div>
                            </a>
                            <div class="product-card__content">
                                <div class="product-card__title">Морковь мытая 0.7-1.0 кг</div>
                                <div class="product-card__old-price text-small">99,90 ₽/кг</div>
                                <div class="product-card__price title-4">59,90 ₽/кг</div>
                            </div>
                            <div class="product-card__btns">
                                <div class="product-card__count count" data-count>
                                    <button class="product-card__count-btn count-btn count-btn__minus"
                                        data-count-btn-minus="true">-</button>
                                    <div class="product-card__count-number" data-count-number>1</div>
                                    <button class="product-card__count-btn count-btn count-btn__plus"
                                        data-count-btn-plus="true">+</button>
                                </div>
                                <button class="btn btn-outlined btn-sm product-card__btn">В корзину</button>
                            </div>
                        </div>
                        <div class="product-card swiper-slide"><a class="product-card__img-wrapper"
                                href="/product.html"><img class="product-card__img"
                                    src="/images/products/product-1.png" alt="">
                                <div class="product-card__box">
                                    <div class="product-card__colors product-card__colors-red">-40%</div>
                                    <div class="product-card__colors product-card__colors-green">Новинка</div>
                                    <div class="product-card__colors product-card__colors-blue">Хит</div>
                                </div>
                            </a>
                            <div class="product-card__content">
                                <div class="product-card__title">Морковь мытая 0.7-1.0 кг</div>
                                <div class="product-card__old-price text-small">99,90 ₽/кг</div>
                                <div class="product-card__price title-4">59,90 ₽/кг</div>
                            </div>
                            <div class="product-card__btns">
                                <div class="product-card__count count" data-count>
                                    <button class="product-card__count-btn count-btn count-btn__minus"
                                        data-count-btn-minus="true">-</button>
                                    <div class="product-card__count-number" data-count-number>1</div>
                                    <button class="product-card__count-btn count-btn count-btn__plus"
                                        data-count-btn-plus="true">+</button>
                                </div>
                                <button class="btn btn-outlined btn-sm product-card__btn">В корзину</button>
                            </div>
                        </div>
                        <div class="product-card swiper-slide"><a class="product-card__img-wrapper"
                                href="/product.html"><img class="product-card__img"
                                    src="/images/products/product-1.png" alt="">
                                <div class="product-card__box">
                                    <div class="product-card__colors product-card__colors-red">-40%</div>
                                    <div class="product-card__colors product-card__colors-green">Новинка</div>
                                    <div class="product-card__colors product-card__colors-blue">Хит</div>
                                </div>
                            </a>
                            <div class="product-card__content">
                                <div class="product-card__title">Морковь мытая 0.7-1.0 кг</div>
                                <div class="product-card__old-price text-small">99,90 ₽/кг</div>
                                <div class="product-card__price title-4">59,90 ₽/кг</div>
                            </div>
                            <div class="product-card__btns">
                                <div class="product-card__count count" data-count>
                                    <button class="product-card__count-btn count-btn count-btn__minus"
                                        data-count-btn-minus="true">-</button>
                                    <div class="product-card__count-number" data-count-number>1</div>
                                    <button class="product-card__count-btn count-btn count-btn__plus"
                                        data-count-btn-plus="true">+</button>
                                </div>
                                <button class="btn btn-outlined btn-sm product-card__btn">В корзину</button>
                            </div>
                        </div>
                        <div class="product-card swiper-slide"><a class="product-card__img-wrapper"
                                href="/product.html"><img class="product-card__img"
                                    src="/images/products/product-1.png" alt="">
                                <div class="product-card__box">
                                    <div class="product-card__colors product-card__colors-red">-40%</div>
                                    <div class="product-card__colors product-card__colors-green">Новинка</div>
                                    <div class="product-card__colors product-card__colors-blue">Хит</div>
                                </div>
                            </a>
                            <div class="product-card__content">
                                <div class="product-card__title">Морковь мытая 0.7-1.0 кг</div>
                                <div class="product-card__old-price text-small">99,90 ₽/кг</div>
                                <div class="product-card__price title-4">59,90 ₽/кг</div>
                            </div>
                            <div class="product-card__btns">
                                <div class="product-card__count count" data-count>
                                    <button class="product-card__count-btn count-btn count-btn__minus"
                                        data-count-btn-minus="true">-</button>
                                    <div class="product-card__count-number" data-count-number>1</div>
                                    <button class="product-card__count-btn count-btn count-btn__plus"
                                        data-count-btn-plus="true">+</button>
                                </div>
                                <button class="btn btn-outlined btn-sm product-card__btn">В корзину</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-promotional__btns swiper-buttons">
                    <button
                        class="section-promotional__btn swiper-button-prev btn btn-rounded btn-rounded--filled-active"
                        data-btn="catalog-prev">
                        <div class="btn-rounded__img">
                            <svg width="12" height="12" viewBox="0 0 14 14" fill=""
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 7L13.7071 7.70711C14.0976 7.31658 14.0976 6.68342 13.7071 6.29289L13 7ZM6.29289 12.2929C5.90237 12.6834 5.90237 13.3166 6.29289 13.7071C6.68342 14.0976 7.31658 14.0976 7.70711 13.7071L6.29289 12.2929ZM7.70711 0.292893C7.31658 -0.0976315 6.68342 -0.0976315 6.29289 0.292893C5.90237 0.683417 5.90237 1.31658 6.29289 1.70711L7.70711 0.292893ZM1 6C0.447715 6 0 6.44772 0 7C0 7.55228 0.447715 8 1 8L1 6ZM12.2929 6.29289L6.29289 12.2929L7.70711 13.7071L13.7071 7.70711L12.2929 6.29289ZM6.29289 1.70711L12.2929 7.70711L13.7071 6.29289L7.70711 0.292893L6.29289 1.70711ZM1 8H13V6L1 6L1 8Z"
                                    fill=""></path>
                            </svg>
                        </div>
                    </button>
                    <div class="section-promotional__pagination section-catalog__pagination swiper-pagination"></div>
                    <button
                        class="section-promotional__btn swiper-button-next btn btn-rounded btn-rounded--filled-active"
                        data-btn="catalog-next">
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
    </div>
    <footer class="footer" data-section>
        <div class="container">
            <div class="footer-top">
                <div class="footer-logo logo">
                    <svg width="100" height="35" viewBox="0 0 100 35" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.9428 0V6.83049H17.7138V35H9.22902V6.83049H0V0H26.9428Z" fill="#82BA01"></path>
                        <path
                            d="M44.2507 0C47.9224 0 51.1311 0.731244 53.8766 2.19373C56.6222 3.65622 58.7392 5.717 60.2278 8.37607C61.7494 11.0019 62.5102 14.0432 62.5102 17.5C62.5102 20.9236 61.7494 23.9649 60.2278 26.6239C58.7392 29.283 56.6056 31.3438 53.827 32.8063C51.0815 34.2688 47.8893 35 44.2507 35H31.201V0H44.2507ZM43.7049 27.6211C46.9135 27.6211 49.411 26.7403 51.1972 24.9786C52.9835 23.217 53.8766 20.7241 53.8766 17.5C53.8766 14.2759 52.9835 11.7664 51.1972 9.97151C49.411 8.17664 46.9135 7.2792 43.7049 7.2792H39.6858V27.6211H43.7049Z"
                            fill="#82BA01"></path>
                        <path
                            d="M88.9351 28.8177H75.9351L73.8511 35H64.9694L77.5725 0H87.3969L100 35H91.0191L88.9351 28.8177ZM86.7519 22.2365L82.4351 9.42308L78.1679 22.2365H86.7519Z"
                            fill="#82BA01"></path>
                    </svg>
                </div>
                <div class="footer-block">
                    <div class="footer-block__title title-4">О компании</div>
                    <ul class="footer-block__list">
                        <li class="footer-block__item"><a class="footer-block__link" href="#">Новости</a></li>
                        <li class="footer-block__item"><a class="footer-block__link"
                                href="/contact.html">Контакты</a></li>
                        <li class="footer-block__item"><a class="footer-block__link" href="#">Пользовательское
                                соглашение</a></li>
                        <li class="footer-block__item"><a class="footer-block__link" href="#">Политика
                                обработки персональных данных</a></li>
                    </ul>
                </div>
                <div class="footer-block">
                    <div class="footer-block__title title-4">Покупателям</div>
                    <ul class="footer-block__list">
                        <li class="footer-block__item"><a class="footer-block__link" href="#">Доставка и
                                оплата</a></li>
                        <li class="footer-block__item"><a class="footer-block__link" href="#">Как вернуть</a>
                        </li>
                        <li class="footer-block__item"><a class="footer-block__link" href="#">Как заказать</a>
                        </li>
                        <li class="footer-block__item"><a class="footer-block__link" href="#">Программа
                                лояльности</a></li>
                        <li class="footer-block__item"><a class="footer-block__link" href="#">Вопросы и
                                ответы</a></li>
                        <li class="footer-block__item"><a class="footer-block__link" href="#">Юридическим
                                лицам</a></li>
                    </ul>
                </div>
                <div class="footer-block">
                    <div class="footer-block__title title-4">Подписаться на рассылку актуальных новостей:</div>
                    <div class="footer-block__form">
                        <input class="input input-white" placeholder="Email">
                        <button class="btn btn-dropdown">
                            <div class="btn-dropdown__icon"><img src="/images/icons/envelope.svg" alt="">
                            </div>
                            <div class="btn-dropdown__text">Подписаться</div>
                        </button>
                    </div>
                    <div class="footer-block__title title-4">Заказывайте товары круглосуточно и задавайте вопросы</div>
                    <a class="footer-block__phone title-2" href="#">8 800 123-45-67 </a>
                </div>
            </div>
        </div>
        <div class="footer-line"></div>
        <div class="container">
            <div class="footer-bottom">
                <div class="footer-copyright">© Интернет-магазин “TDA”</div>
                <ul class="footer-bottom__list social__list">
                    <li class="footer-bottom__item social__item"><a class="footer-bottom__link social__link"
                            href="">
                            <svg class="social__icon" width="20" height="16" viewBox="0 0 20 16"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.6 1.89999C18.9 2.19999 18.1 2.4 17.3 2.5C18.1 2 18.8 1.2 19.1 0.300003C18.3 0.800003 17.5 1.1 16.5 1.3C15.8 0.500003 14.7 0 13.6 0C11.4 0 9.59999 1.8 9.59999 4C9.59999 4.3 9.6 4.59999 9.7 4.89999C6.4 4.69999 3.39999 3.1 1.39999 0.699997C1.09999 1.3 0.899994 2 0.899994 2.7C0.899994 4.1 1.6 5.3 2.7 6C2 6 1.39999 5.8 0.899994 5.5C0.899994 7.4 2.29999 9.09999 4.09999 9.39999C3.79999 9.49999 3.4 9.5 3 9.5C2.7 9.5 2.5 9.49999 2.2 9.39999C2.7 11 4.2 12.2 6 12.2C4.6 13.3 2.9 13.9 1 13.9C0.7 13.9 0.4 13.9 0 13.8C1.8 14.9 3.9 15.6 6.2 15.6C13.6 15.6 17.6 9.5 17.6 4.2V3.7C18.4 3.4 19.1 2.69999 19.6 1.89999Z"
                                    fill=""></path>
                            </svg></a></li>
                    <li class="footer-bottom__item social__item"><a class="footer-bottom__link social__link"
                            href="">
                            <svg class="social__icon" width="17" height="17" viewBox="0 0 17 17"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17 2.81865C17 1.32124 15.6788 0 14.1813 0H2.81865C1.32124 0 0 1.32124 0 2.81865V14.1813C0 15.6787 1.32124 17 2.81865 17H8.54404V10.5699H6.43005V7.7513H8.54404V6.60622C8.54404 4.66839 9.95337 2.99481 11.715 2.99481H14.0052V5.81346H11.715C11.4508 5.81346 11.1865 6.07772 11.1865 6.60622V7.7513H14.0052V10.5699H11.1865V17H14.1813C15.6788 17 17 15.6787 17 14.1813V2.81865Z"
                                    fill=""></path>
                            </svg></a></li>
                    <li class="footer-bottom__item social__item"><a class="footer-bottom__link social__link"
                            href="">
                            <svg class="social__icon" width="21" height="13" viewBox="0 0 21 13"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.8065 11.1143C20.8065 11.0313 20.7235 11.0313 20.7235 10.9482C20.3914 10.2841 19.6442 9.45383 18.6479 8.54057C18.1498 8.12546 17.9007 7.79336 17.7346 7.62732C17.4856 7.29523 17.4856 7.04616 17.5686 6.71407C17.6516 6.465 17.9837 6.04988 18.5649 5.30267C18.897 4.88756 19.063 4.6385 19.3121 4.38943C20.5574 2.72897 21.1386 1.64966 20.9725 1.15153L20.8895 1.06851C20.8065 0.985488 20.7235 0.902467 20.5574 0.902467C20.3914 0.819444 20.1423 0.819444 19.8932 0.902467H16.7384C16.6554 0.902467 16.6553 0.902467 16.4893 0.902467C16.4063 0.902467 16.3233 0.902467 16.3233 0.902467H16.2402H16.1572L16.0742 0.985483C15.9912 1.06851 15.9912 1.0685 15.9912 1.15153C15.6591 2.06478 15.244 2.81198 14.8288 3.64221C14.5798 4.05733 14.3307 4.47245 14.0816 4.80454C13.8326 5.13663 13.6665 5.3857 13.5005 5.55174C13.3344 5.71779 13.1684 5.80081 13.0854 5.96686C13.0023 6.04988 12.8363 6.13291 12.8363 6.04989C12.7533 6.04989 12.6702 6.04988 12.6702 5.96686C12.5872 5.88384 12.5042 5.80081 12.4212 5.71779C12.3382 5.63476 12.3382 5.46872 12.2551 5.30267C12.2551 5.13663 12.2551 4.97058 12.2551 4.88756C12.2551 4.80453 12.2551 4.55547 12.2551 4.38943C12.2551 4.14036 12.2551 3.97431 12.2551 3.89128C12.2551 3.64222 12.2551 3.31013 12.2551 2.97804C12.2551 2.64595 12.2551 2.39687 12.2551 2.23083C12.2551 2.06478 12.2551 1.81571 12.2551 1.64967C12.2551 1.4006 12.2551 1.23455 12.2551 1.15153C12.2551 1.0685 12.1721 0.902462 12.1721 0.819439C12.0891 0.736416 12.0061 0.653391 11.923 0.570368C11.84 0.487345 11.674 0.487347 11.591 0.404325C11.1758 0.321302 10.6777 0.238281 10.0966 0.238281C8.76819 0.238281 7.85493 0.321307 7.52284 0.487353C7.35679 0.570376 7.19075 0.653393 7.10772 0.819439C6.94168 0.985485 6.94167 1.06851 7.02469 1.06851C7.43981 1.15153 7.77191 1.31757 7.93795 1.56664L8.02098 1.7327C8.104 1.81572 8.10399 1.98176 8.18701 2.23083C8.27003 2.4799 8.27004 2.72896 8.27004 3.06106C8.27004 3.55919 8.27004 4.05734 8.27004 4.38943C8.27004 4.80454 8.18701 5.0536 8.18701 5.30267C8.18701 5.55174 8.104 5.71779 8.02098 5.80082C7.93796 5.96686 7.93795 6.04989 7.85492 6.04989C7.85492 6.04989 7.85492 6.1329 7.7719 6.1329C7.68887 6.1329 7.60585 6.21593 7.43981 6.21593C7.35679 6.21593 7.19075 6.13291 7.10772 6.04989C6.94168 5.96686 6.77563 5.80082 6.69261 5.63477C6.52656 5.46873 6.36051 5.21965 6.19447 4.88756C6.02842 4.55547 5.77934 4.22338 5.61329 3.72524L5.44726 3.39316C5.36424 3.22711 5.1982 2.89501 5.03215 2.4799C4.8661 2.06478 4.70005 1.7327 4.53401 1.31758C4.45098 1.15154 4.36797 1.06851 4.28495 0.985483H4.20192C4.20192 0.985483 4.11889 0.902467 4.03586 0.902467C3.95284 0.902467 3.86983 0.819439 3.78681 0.819439H0.797975C0.465883 0.819439 0.29984 0.90246 0.216817 0.985483L0.133789 1.06851C0.133789 1.06851 0.133789 1.15153 0.133789 1.23455C0.133789 1.31758 0.133794 1.40059 0.216817 1.56664C0.631932 2.56292 1.13007 3.5592 1.6282 4.55547C2.12634 5.46872 2.62448 6.29895 2.95658 6.88012C3.37169 7.46128 3.70378 8.04244 4.11889 8.54057C4.53401 9.03871 4.78307 9.3708 4.86609 9.53685C5.03214 9.70289 5.11516 9.78591 5.19818 9.86893L5.44726 10.118C5.61331 10.2841 5.86237 10.5331 6.19447 10.7822C6.52656 11.0313 6.94167 11.2803 7.35678 11.5294C7.7719 11.7785 8.27004 11.9445 8.76818 12.1106C9.34934 12.2766 9.84747 12.3596 10.3456 12.2766H11.591C11.84 12.2766 12.0061 12.1936 12.1721 12.0275L12.2551 11.9445C12.2551 11.8615 12.3382 11.8615 12.3382 11.7785C12.3382 11.6954 12.3382 11.6124 12.3382 11.4464C12.3382 11.1143 12.3382 10.8652 12.4212 10.6161C12.5042 10.3671 12.5042 10.201 12.5872 10.035C12.6703 9.86894 12.7533 9.78591 12.8363 9.70289C12.9193 9.61987 13.0024 9.53685 13.0024 9.53685H13.0854C13.2514 9.45382 13.5005 9.53684 13.6665 9.70289C13.9156 9.86894 14.1647 10.118 14.3307 10.3671C14.4967 10.6161 14.7458 10.8652 15.0779 11.1973C15.41 11.5294 15.6591 11.7785 15.8251 11.8615L16.0742 12.0275C16.2402 12.1106 16.4063 12.1936 16.6554 12.2766C16.9044 12.3596 17.0705 12.3596 17.2365 12.3596L20.0593 12.2766C20.3084 12.2766 20.5574 12.1936 20.7235 12.1106C20.8895 12.0275 20.9725 11.9445 20.9725 11.7785C20.9725 11.6954 20.9725 11.5294 20.9725 11.4464C20.8065 11.2803 20.8065 11.1973 20.8065 11.1143Z"
                                    fill=""></path>
                            </svg></a></li>
                    <li class="footer-bottom__item social__item"><a class="footer-bottom__link social__link"
                            href="">
                            <svg class="social__icon" width="17" height="17" viewBox="0 0 17 17"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.5808 0H2.41923C1.04615 0 0 1.04615 0 2.41923V14.5808C0 15.9538 1.04615 17 2.41923 17H14.5808C15.9538 17 17 15.9538 17 14.5808V2.41923C17 1.04615 15.9538 0 14.5808 0ZM8.5 13.6C11.3115 13.6 13.6 11.3769 13.6 8.69615C13.6 8.23846 13.5346 7.71538 13.4038 7.32308H14.8423V14.2538C14.8423 14.5808 14.5808 14.9077 14.1885 14.9077H2.81154C2.48462 14.9077 2.15769 14.6462 2.15769 14.2538V7.25769H3.66154C3.53077 7.71538 3.46539 8.17308 3.46539 8.63077C3.4 11.3769 5.68846 13.6 8.5 13.6ZM8.5 11.6385C6.66923 11.6385 5.23077 10.2 5.23077 8.43462C5.23077 6.66923 6.66923 5.23077 8.5 5.23077C10.3308 5.23077 11.7692 6.66923 11.7692 8.43462C11.7692 10.2654 10.3308 11.6385 8.5 11.6385ZM14.7769 4.64231C14.7769 5.03461 14.45 5.36154 14.0577 5.36154H12.2269C11.8346 5.36154 11.5077 5.03461 11.5077 4.64231V2.87692C11.5077 2.48462 11.8346 2.15769 12.2269 2.15769H14.0577C14.45 2.15769 14.7769 2.48462 14.7769 2.87692V4.64231Z"
                                    fill=""></path>
                            </svg></a></li>
                </ul>
            </div>
        </div>
        <div class="backdrop">
            <div class="modal">
                <div class="modal__header">
                    <div class="title-2">Заказ ZK271221</div><img class="close" src="/images/icons/close.svg"
                        alt="" data-orders-close>
                </div>
                <ul class="orders__list">
                    <li class="orders__item">
                        <div class="orders__image"><img class="orders__image-img"
                                src="/images/products/product-1.png" alt="">
                            <ul class="orders__image-list">
                                <li class="orders__image-item product-card__colors product-card__colors-red">-40%</li>
                                <li class="orders__image-item product-card__colors product-card__colors-green">Новинка
                                </li>
                                <li class="orders__image-item product-card__colors product-card__colors-blue">Хит</li>
                            </ul>
                        </div>
                        <div class="orders__info">
                            <div class="orders__info-title title-4">Морковь мытая 0.7-1.0 кг</div>
                            <div class="orders__info-oldprice">99,90 ₽/кг</div>
                            <div class="orders__info-price title-4">59,90 ₽/кг</div>
                        </div>
                        <div class="orders__count">1шт.</div>
                        <div class="orders__price title-3">59,90 ₽</div>
                    </li>
                    <li class="orders__item">
                        <div class="orders__image"><img class="orders__image-img"
                                src="/images/products/product-1.png" alt="">
                            <ul class="orders__image-list">
                                <li class="orders__image-item product-card__colors product-card__colors-red">-40%</li>
                                <li class="orders__image-item product-card__colors product-card__colors-green">Новинка
                                </li>
                                <li class="orders__image-item product-card__colors product-card__colors-blue">Хит</li>
                            </ul>
                        </div>
                        <div class="orders__info">
                            <div class="orders__info-title title-4">Морковь мытая 0.7-1.0 кг</div>
                            <div class="orders__info-oldprice">99,90 ₽/кг</div>
                            <div class="orders__info-price title-4">59,90 ₽/кг</div>
                        </div>
                        <div class="orders__count">1шт.</div>
                        <div class="orders__price title-3">59,90 ₽</div>
                    </li>
                </ul>
                <hr class="hr">
                <div class="modal__total">
                    <div class="modal__total-text text-gray">Итого:</div>
                    <div class="modal__total-price title-2">119, 80 ₽</div>
                </div>
                <div class="modal__bottom">
                    <table>
                        <thead>
                            <tr>
                                <th>Дата заказа</th>
                                <th>Время заказа</th>
                                <th>Способ доставки</th>
                                <th>Адрес доставки</th>
                                <th>Время доставки</th>
                                <th>Статус</th>
                                <th>Способ оплаты</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>15.12.21</td>
                                <td>11:01</td>
                                <td>Курьер</td>
                                <td>г. Москва, ул. Зенитная, д.10</td>
                                <td>13:00 - 15:00</td>
                                <td><span class="cabinet-table__status">Отменен</span><span
                                        class="text-gray text-small">(Ошибочный заказ)</span></td>
                                <td>Картой курьеру</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <form class="comments" action="">
                    <label for="">Комментарий</label>
                    <textarea class="textarea-comments" name="" cols="30" rows="10"></textarea>
                    <button class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </footer>
    <script src="/js/swiper-bundle.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>
