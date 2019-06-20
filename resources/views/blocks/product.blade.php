@php
/**
 * Name:
 * Product Block
 *
 * Description:
 * Product block displayed in shop
 *
 * Data:
 * Title
 * Price
 * Image
 * Permalink
 * Add to basket - Link
 *
 * Styles: /blocks/product
 * */
    $product = wc_get_product( $product->ID );
    $title = $product->get_name();
    $price = $product->get_price();
    $image = $product->get_image_id();
    $permalink = $product->get_permalink();
    $addToBasket = $product->add_to_cart_url();
@endphp

<a class="product" href="{{ $permalink ? $permalink : '/' }}">
    <header class="product__header">
        <h3 class="product__title subtitle light">
            {{ $title ? $title : 'Title' }}
        </h3>
        <span class="title bold" data-price>
            {!! $price ? $price : '-' !!}
        </span>
    </header>
    {!! image($image, 'full', 'product__image') !!}
    <footer class="product__footer">
        <a href="{{ $addToBasket }}">
            <span class="icon icon--plus icon--dark"></span>
        </a>
    </footer>
</a>
