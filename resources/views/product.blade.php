@extends('layout.main')

@section('title', 'Товар ')

@section('content')
<div class="section section-catalog-detail section-catalog__newslist">
    <div class="container">
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="/">Главная</a></li>
                <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="/">Каталог</a></li>
                <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="/">{{ $category }}</a></li>
            </ul>
        </div>
        <div class="product">
            <div class="product-img">
                <ul class="product-img__list">
                    <li class="product-img__item is--active"><img class="product-img__picture"
                            src="/images/products/product-1.png" alt=""></li>
                    <li class="product-img__item"><img class="product-img__picture" src="/images/products/product-1.png"
                            alt=""></li>
                    <li class="product-img__item"><img class="product-img__picture" src="/images/products/product-1.png"
                            alt=""></li>
                </ul><img class="product-img__picture-big" src="/images/products/product-big.png"
                    alt="big product picture">
            </div>
            <div class="product-content">
                <div class="product-content__head">
                    <div class="product-card__colors product-card__colors-red">-40%</div>
                    <div class="product-card__colors product-card__colors-green">Новинка</div>
                    <div class="product-card__colors product-card__colors-blue">Хит</div>
                </div>
                <div class="product-content__title title-2">{{ $product }}</div>
                <div class="product-content__price-wrapper">
                    <div class="product-content__price-block">
                        <div class="product-content__price-old">99,90 ₽/кг</div>
                        <div class="product-content__price title-2">59,90 ₽/кг</div>
                    </div>
                    <div class="product-content__count-block">
                        <div class="product-card__count count" data-count>
                            <button class="product-card__count-btn count-btn count-btn__minus"
                                data-count-btn-minus="true">-</button>
                            <div class="product-card__count-number" data-count-number>1</div>
                            <button class="product-card__count-btn count-btn count-btn__plus"
                                data-count-btn-plus="true">+</button>
                        </div>
                    </div>
                    <div class="product-content__count-block">
                        <button class="btn btn-outlined btn-sm product-card__btn">В корзину</button>
                    </div>
                </div>
                <div class="product-content__description">
                    <div class="product-content__description-title title-4">Описание:</div>
                    <ul class="product-content__description-list">
                        <li class="product-content__description-item">Год урожая 2021.</li>
                        <li class="product-content__description-item">Хранить при температуре от +2 до +8 C.</li>
                        <li class="product-content__description-item">Срок годности 14 дней.</li>
                        <li class="product-content__description-item">ТУ 9739-007-73492117-05</li>
                    </ul>
                </div>
                <div class="product-content__description">
                    <div class="product-content__description-title title-4">Характеристики:</div>
                    <ul class="product-content__description-list">
                        <li class="product-content__description-item">В упаковке <span>210x120x100 мм (ДxШxВ)</span>
                        </li>
                        <li class="product-content__description-item">Тип продукта<span>Морковь</span></li>
                        <li class="product-content__description-item">Тип обработки<span>Свежие</span></li>
                        <li class="product-content__description-item">Вес товара<span>1 кг</span></li>
                        <li class="product-content__description-item">Страна<span>Египет</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-catalog__products-slider title-3 section-catalog__title">Наши спецпредложения</div>
        <div class="section-catalog__products-slider swiper">
            <div class="section-catalog__products section-catalog__slider">
                <div class="swiper-wrapper">
                    <div class="product-card swiper-slide">
                        <div class="product-card__img-wrapper"><img class="product-card__img"
                                src="/images/products/product-1.png" alt="">
                            <div class="product-card__box">
                                <div class="product-card__colors product-card__colors-red">-40%</div>
                                <div class="product-card__colors product-card__colors-green">Новинка</div>
                                <div class="product-card__colors product-card__colors-blue">Хит</div>
                            </div>
                        </div>
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
                    <div class="product-card swiper-slide">
                        <div class="product-card__img-wrapper"><img class="product-card__img"
                                src="/images/products/product-1.png" alt="">
                            <div class="product-card__box">
                                <div class="product-card__colors product-card__colors-red">-40%</div>
                                <div class="product-card__colors product-card__colors-green">Новинка</div>
                                <div class="product-card__colors product-card__colors-blue">Хит</div>
                            </div>
                        </div>
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
                    <div class="product-card swiper-slide">
                        <div class="product-card__img-wrapper"><img class="product-card__img"
                                src="/images/products/product-1.png" alt="">
                            <div class="product-card__box">
                                <div class="product-card__colors product-card__colors-red">-40%</div>
                                <div class="product-card__colors product-card__colors-green">Новинка</div>
                                <div class="product-card__colors product-card__colors-blue">Хит</div>
                            </div>
                        </div>
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
                    <div class="product-card swiper-slide">
                        <div class="product-card__img-wrapper"><img class="product-card__img"
                                src="/images/products/product-1.png" alt="">
                            <div class="product-card__box">
                                <div class="product-card__colors product-card__colors-red">-40%</div>
                                <div class="product-card__colors product-card__colors-green">Новинка</div>
                                <div class="product-card__colors product-card__colors-blue">Хит</div>
                            </div>
                        </div>
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
                    <div class="product-card swiper-slide">
                        <div class="product-card__img-wrapper"><img class="product-card__img"
                                src="/images/products/product-1.png" alt="">
                            <div class="product-card__box">
                                <div class="product-card__colors product-card__colors-red">-40%</div>
                                <div class="product-card__colors product-card__colors-green">Новинка</div>
                                <div class="product-card__colors product-card__colors-blue">Хит</div>
                            </div>
                        </div>
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
                    <div class="product-card swiper-slide">
                        <div class="product-card__img-wrapper"><img class="product-card__img"
                                src="/images/products/product-1.png" alt="">
                            <div class="product-card__box">
                                <div class="product-card__colors product-card__colors-red">-40%</div>
                                <div class="product-card__colors product-card__colors-green">Новинка</div>
                                <div class="product-card__colors product-card__colors-blue">Хит</div>
                            </div>
                        </div>
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
                    <div class="product-card swiper-slide">
                        <div class="product-card__img-wrapper"><img class="product-card__img"
                                src="/images/products/product-1.png" alt="">
                            <div class="product-card__box">
                                <div class="product-card__colors product-card__colors-red">-40%</div>
                                <div class="product-card__colors product-card__colors-green">Новинка</div>
                                <div class="product-card__colors product-card__colors-blue">Хит</div>
                            </div>
                        </div>
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
                    <div class="product-card swiper-slide">
                        <div class="product-card__img-wrapper"><img class="product-card__img"
                                src="/images/products/product-1.png" alt="">
                            <div class="product-card__box">
                                <div class="product-card__colors product-card__colors-red">-40%</div>
                                <div class="product-card__colors product-card__colors-green">Новинка</div>
                                <div class="product-card__colors product-card__colors-blue">Хит</div>
                            </div>
                        </div>
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
                <button class="section-promotional__btn swiper-button-prev btn btn-rounded btn-rounded--filled-active"
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
                <button class="section-promotional__btn swiper-button-next btn btn-rounded btn-rounded--filled-active"
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
@endsection
