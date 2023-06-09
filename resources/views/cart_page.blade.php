<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title></title>
    <link href="{{ asset('css/cart.css') }}" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <section class="shop">
        <div class="shop__header">
            <h1 class="shop__title">Shop title</h1>
            <p class="shop__text">
                <a class="button js-toggle-cart" href="#" title="View cart">
                    View cart
                </a>
            </p>
        </div>
        <div class="shop__products">
            <div class="products">
                <div class="products__item">

                    <article class="product">
                        <h1 class="product__title">Product title</h1>
                        <p class="product__text">
                            <a class="button js-add-product" href="#" title="Add to cart">
                                Add to cart
                            </a>
                        </p>
                    </article>

                </div>
                <div class="products__item">

                    <article class="product">
                        <h1 class="product__title">Product title</h1>
                        <p class="product__text">
                            <a class="button js-add-product" href="#" title="Add to cart">
                                Add to cart
                            </a>
                        </p>
                    </article>

                </div>
                <div class="products__item">

                    <article class="product">
                        <h1 class="product__title">Product title</h1>
                        <p class="product__text">
                            <a class="button js-add-product" href="#" title="Add to cart">
                                Add to cart
                            </a>
                        </p>
                    </article>

                </div>
                <div class="products__item">

                    <article class="product">
                        <h1 class="product__title">Product title</h1>
                        <p class="product__text">
                            <a class="button js-add-product" href="#" title="Add to cart">
                                Add to cart
                            </a>
                        </p>
                    </article>

                </div>
                <div class="products__item">

                    <article class="product">
                        <h1 class="product__title">Product title</h1>
                        <p class="product__text">
                            <a class="button js-add-product" href="#" title="Add to cart">
                                Add to cart
                            </a>
                        </p>
                    </article>

                </div>
                <div class="products__item">

                    <article class="product">
                        <h1 class="product__title">Product title</h1>
                        <p class="product__text">
                            <a class="button js-add-product" href="#" title="Add to cart">
                                Add to cart
                            </a>
                        </p>
                    </article>

                </div>
                <div class="products__item">

                    <article class="product">
                        <h1 class="product__title">Product title</h1>
                        <p class="product__text">
                            <a class="button js-add-product" href="#" title="Add to cart">
                                Add to cart
                            </a>
                        </p>
                    </article>

                </div>
                <div class="products__item">

                    <article class="product">
                        <h1 class="product__title">Product title</h1>
                        <p class="product__text">
                            <a class="button js-add-product" href="#" title="Add to cart">
                                Add to cart
                            </a>
                        </p>
                    </article>

                </div>
                <div class="products__item">

                    <article class="product">
                        <h1 class="product__title">Product title</h1>
                        <p class="product__text">
                            <a class="button js-add-product" href="#" title="Add to cart">
                                Add to cart
                            </a>
                        </p>
                    </article>

                </div>
                <div class="products__item">

                    <article class="product">
                        <h1 class="product__title">Product title</h1>
                        <p class="product__text">
                            <a class="button js-add-product" href="#" title="Add to cart">
                                Add to cart
                            </a>
                        </p>
                    </article>

                </div>
                <div class="products__item">

                    <article class="product">
                        <h1 class="product__title">Product title</h1>
                        <p class="product__text">
                            <a class="button js-add-product" href="#" title="Add to cart">
                                Add to cart
                            </a>
                        </p>
                    </article>

                </div>
                <div class="products__item">

                    <article class="product">
                        <h1 class="product__title">Product title</h1>
                        <p class="product__text">
                            <a class="button js-add-product" href="#" title="Add to cart">
                                Add to cart
                            </a>
                        </p>
                    </article>

                </div>
            </div>
        </div>
    </section>

    <aside class="cart js-cart">
        <div class="cart__header">
            <h1 class="cart__title">Shopping cart</h1>
            <p class="cart__text">
                <a class="button button--light js-toggle-cart" href="#" title="Close cart">
                    Close cart
                </a>
            </p>
        </div>
        <div class="cart__products js-cart-products">
            <p class="cart__empty js-cart-empty">
                Add a product to your cart
            </p>
            <div class="cart__product js-cart-product-template">
                <article class="js-cart-product">
                    <h1>Product title</h1>
                    <p>
                        <a class="js-remove-product" href="#" title="Delete product">
                            Delete product
                        </a>
                    </p>
                </article>
            </div>
        </div>
        <div class="cart__footer">
            <p class="cart__text">
                <a class="button" href="#" title="Buy products">
                    Buy products
                </a>
            </p>
        </div>
    </aside>

    <div class="lightbox js-lightbox js-toggle-cart"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/cart.js') }}"></script>
</body>

</html>