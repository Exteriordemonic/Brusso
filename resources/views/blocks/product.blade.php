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
$id = $product->get_id();
$image = get_field('product-list', $product->get_id())['ID'];
$permalink = $product->get_permalink();
$addToBasket = $product->add_to_cart_url();

$colors = get_field('products', $product->ID);
@endphp

<a class="product" href="{{ $permalink ? $permalink : '/' }}">
    <header class="product__header">
        <span class="product__price subtitle" data-price>
            {!! $price ? $price : '-' !!}
        </span>
    </header>
    
    @if ($image)
    {!! image($image, 'full', 'product__image') !!}
    @else
    <img class="product__image" src="@asset('/images/sofa001.png')" alt="{{ $title }}">
    @endif

    @include('blocks.product-color-images', ['colors'=>$colors, 'ID' => $id])

    <footer class="product__footer">
        <h3 class="product__title subtitle">
            {{ $title ? $title : 'Title' }}
        </h3>
    </footer>
</a>

@if ($colors)
<div class="product__colors">
    @include('blocks.colors', ['colors' => $colors, 'ID' => $id, 'hover'=>true])
</div>
@endif