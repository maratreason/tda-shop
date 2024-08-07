@extends('layout.main')

@section('title', 'Продукция ' . $category->title)

@section('content')
<div class="section section-catalog-detail">
    <div class="container">
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="/">Главная</a></li>
                <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="/category">Каталог</a></li>
                <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="/">{{ $category->title }}</a>
                </li>
            </ul>
        </div>
        <div class="title-2 section-catalog__title">{{ $category->title }}</div>
        <div class="catalog-detail__filter">
            <button class="btn btn-rounded" data-catalog-filter><svg width="22" height="20"
                    viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 1H1L9 10.46V17L13 19V10.46L21 1Z" stroke="#82BA01" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button><a class="link" href="" data-catalog-filter>Фильтр</a>
        </div>
        <div class="catalog-detail__inner">
            <div class="catalog-detail__sitebar sitebar" data-catalog-filter-content><a class="sitebar__header"
                    href="#">
                    <svg width="10" height="12" viewBox="0 0 10 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 9L1 5L5 1" stroke="#272727" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg><span data-catalog-filter-close>Назад</span></a>
                <div class="sitebar__box">
                    <div class="sitebar__title title-4">Категории</div>
                    <ul class="sitebar__categories-list">
                        <li class="sitebar__categories-item">Овощи</li>
                        <li class="sitebar__categories-item">Фрукты</li>
                        <li class="sitebar__categories-item">Ягоды</li>
                        <li class="sitebar__categories-item">Зелень, салаты, травы</li>
                        <li class="sitebar__categories-item">Грибы</li>
                    </ul>
                </div>
                <div class="sitebar__box">
                    <div class="sitebar__title title-4">Предложения</div>
                    <div class="sitebar__box-item">
                        <div class="sitebar__box-checkbox">
                            <input class="checkbox" type="checkbox" checked>
                            <label class="sitebar__box-checkbox-label">Со скидкой</label>
                        </div><span>(300)</span>
                    </div>
                    <div class="sitebar__box-item">
                        <div class="sitebar__box-checkbox">
                            <input class="checkbox" type="checkbox">
                            <label class="sitebar__box-checkbox-label">Новинка</label>
                        </div><span>(300)</span>
                    </div>
                    <div class="sitebar__box-item">
                        <div class="sitebar__box-checkbox">
                            <input class="checkbox" type="checkbox">
                            <label class="sitebar__box-checkbox-label">Акции</label>
                        </div><span>(300)</span>
                    </div>
                </div>

                <div class="accordion" data-accordion>
                    <div class="sitebar__box accordion__control" data-accordion-control>
                        <div class="sitebar__title accordion__title title-4" data-accordion-title>Цена, ₽</div>
                        <div class="sitebar__box-item accordion__content" data-accordion-content>
                            <div class="sitebar__box-range">
                                <div class="price-input">
                                    <div class="field">
                                        <input class="input-min" type="number" value="2500">
                                    </div>
                                    <div class="separator">-</div>
                                    <div class="field">
                                        <input class="input-max" type="number" value="7500">
                                    </div>
                                </div>
                                <div class="slider">
                                    <div class="progress"></div>
                                </div>
                                <div class="range-input">
                                    <input class="range-min" type="range" min="0" max="10000"
                                        value="2500" step="10">
                                    <input class="range-max" type="range" min="0" max="10000"
                                        value="7500" step="10">
                                </div>
                                <div class="range-price text-small">
                                    <div class="range-price__min">2500 ₽</div>
                                    <div class="range-price__max">7500 ₽</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sitebar__box accordion__control" data-accordion-control>
                        <div class="sitebar__title accordion__title title-4" data-accordion-title>Тип продукта
                        </div>
                        <div class="sitebar__box-item accordion__content" data-accordion-content>
                            <div class="search-input">
                                <input type="text" placeholder="Поиск по списку">
                                <button class="search-input__btn">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11 17C15.4183 17 19 13.4183 19 9C19 4.58172 15.4183 1 11 1C6.58172 1 3 4.58172 3 9C3 13.4183 6.58172 17 11 17Z"
                                            stroke="" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M21.0004 18.9999L16.6504 14.6499" stroke="" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="sitebar__list">
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Авокадо</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Аджика</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Айва</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Ананас</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Апельсин</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Арбуз</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Артишок</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Ассорти грибов</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Ассорти овощей</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Ассорти фруктов</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Апельсин</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Арбуз</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Ассорти овощей</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Ассорти фруктов</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Апельсин</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Арбуз</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Ассорти овощей</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Ассорти фруктов</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Апельсин</label>
                                </div>
                            </div>
                            <div class="sitebar__box-item">
                                <div class="sitebar__box-checkbox">
                                    <input class="checkbox" type="checkbox">
                                    <label class="sitebar__box-checkbox-label">Арбуз</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sitebar__box accordion__control" data-accordion-control>
                        <div class="sitebar__title accordion__title title-4" data-accordion-title>Не содержит</div>
                        <div class="sitebar__box-item accordion__content" data-accordion-content>Content</div>
                    </div>
                    <div class="sitebar__box accordion__control" data-accordion-control>
                        <div class="sitebar__title accordion__title title-4" data-accordion-title>Особенности</div>
                        <div class="sitebar__box-item accordion__content" data-accordion-content>Content</div>
                    </div>
                    <div class="sitebar__box accordion__control" data-accordion-control>
                        <div class="sitebar__title accordion__title title-4" data-accordion-title>Бренд</div>
                        <div class="sitebar__box-item accordion__content" data-accordion-content>Content</div>
                    </div>
                    <div class="sitebar__box accordion__control" data-accordion-control>
                        <div class="sitebar__title accordion__title title-4" data-accordion-title>Страна</div>
                        <div class="sitebar__box-item accordion__content" data-accordion-content>Content</div>
                    </div>
                </div>

                <div class="sitebar__box">
                    <button class="btn btn-outlined">Сбросить всё</button>
                </div>

            </div>
            <div class="catalog-detail__content">
                <div class="catalog-detail__content-top">
                    <div class="catalog-detail__content-changes">
                        <div class="select" data-select>
                            <div class="select-text"><span>Показывать по 40</span>
                                <div class="btn-dropdown__icon"><img src="/images/icons/chevron-down.svg"
                                        alt="" data-select-icon></div>
                            </div>
                            <ul class="select-list">
                                <li class="select-item">Показывать по 40</li>
                                <li class="select-item">Показывать по 30</li>
                                <li class="select-item">Показывать по 20</li>
                            </ul>
                        </div>
                        <div class="select" data-select>
                            <div class="select-text"><span>По популярности</span>
                                <div class="btn-dropdown__icon"><img src="/images/icons/chevron-down.svg"
                                        alt="" data-select-icon></div>
                            </div>
                            <ul class="select-list">
                                <li class="select-item">По популярности</li>
                                <li class="select-item">По названию</li>
                                <li class="select-item">По цене</li>
                            </ul>
                        </div>
                        <div class="select" data-select>
                            <div class="select-text"><span>По возрастанию цены</span>
                                <div class="btn-dropdown__icon"><img src="/images/icons/chevron-down.svg"
                                        alt="" data-select-icon></div>
                            </div>
                            <ul class="select-list">
                                <li class="select-item">По возрастанию цены</li>
                                <li class="select-item">По убыванию цены</li>
                            </ul>
                        </div>
                    </div>
                    <div class="catalog-detail__content-btns">
                        <button class="btn btn-rounded btn-primary"><img src="/images/icons/more-vertical.svg"
                                alt=""></button>
                        <button class="btn btn-rounded btn-primary-outlined"><img
                                src="/images/icons/more-horizontal.svg" alt=""></button>
                    </div>
                </div>

                <ul class="catalog-detail__chips-list">
                    <li class="catalog-detail__chips-item">
                        <button class="btn btn-success btn-chips">Со скидкой<img src="/images/icons/exit.svg"
                                alt=""></button>
                    </li>
                    <li class="catalog-detail__chips-item">
                        <button class="btn btn-success btn-success-outlined btn-chips">Сбросить все</button>
                    </li>
                </ul>

                <div class="catalog-detail__content-products">
                    @for ($i = 0; $i < 15; $i++)
                        @include('partials.product-card')
                    @endfor
                </div>
                <div class="line"></div>
                <div class="catalog-detail__content-pagination">
                    <button class="btn btn-primary">Показать еще</button>
                    <div class="pagination">
                        <ul class="pagination__list">
                            <li class="pagination__item"><a class="pagination__link pagination__link--active"
                                    href="#">1</a></li>
                            <li class="pagination__item"><a class="pagination__link" href="#">2</a></li>
                            <li class="pagination__item"><a class="pagination__link" href="#">3</a></li>
                            <li class="pagination__item"><a class="pagination__link" href="#">4</a></li>
                            <li class="pagination__item"><a class="pagination__link" href="#">5</a></li>
                            <li class="pagination__item"><a class="pagination__link" href="#">...</a></li>
                            <li class="pagination__item"><a class="pagination__link" href="#">8</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
