@extends('layout.main')

@section('title', 'Корзина')

@section('content')
    <div class="section">
        <div class="container">
            <div class="modal__header basket">
                <div class="title-2">Заказ ZK271221</div>
            </div>
            <div class="modal__bottom">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Картинка</th>
                            <th>Название</th>
                            <th>Количество</th>
                            <th>Сумма</th>
                            <th>Итого</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td style="display: flex; justify-content: center;">
                                <img class="orders__image-img" src="images/products/product-1.png" alt="" style="width: 50px; height: 50px;">
                            </td>
                            <td>Морковь мытая 0.7-1.0 кг</td>
                            <td style="display: flex; justify-content: center;">
                                <div class="product-card__btns">
                                    <div class="product-card__count count" data-count>
                                        <button class="product-card__count-btn count-btn count-btn__minus"
                                            data-count-btn-minus="true">-</button>
                                        <div class="product-card__count-number" data-count-number>2</div>
                                        <button class="product-card__count-btn count-btn count-btn__plus"
                                            data-count-btn-plus="true">+</button>
                                    </div>
                                </div>
                            </td>
                            <td>59.90 ₽</td>
                            <td>119, 80 ₽</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td style="display: flex; justify-content: center;">
                                <img class="orders__image-img" src="images/products/product-1.png" alt="" style="width: 50px; height: 50px;">
                            </td>
                            <td>Морковь мытая 0.7-1.0 кг</td>
                            <td style="display: flex; justify-content: center;">
                                <div class="product-card__btns">
                                    <div class="product-card__count count" data-count>
                                        <button class="product-card__count-btn count-btn count-btn__minus"
                                            data-count-btn-minus="true">-</button>
                                        <div class="product-card__count-number" data-count-number>1</div>
                                        <button class="product-card__count-btn count-btn count-btn__plus"
                                            data-count-btn-plus="true">+</button>
                                    </div>
                                </div>
                            </td>
                            <td>59.90 ₽</td>
                            <td>59.90 ₽</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="basket__total">179.70 ₽</div>

            <form class="basket__btns" action="{{ route('basket-place') }}">
                <button class="btn btn-primary" type="submit">Оформить заказ</button>
                <button class="btn btn-outlined">Отмена</button>
                @csrf
            </form>
        </div>
    </div>
@endsection
