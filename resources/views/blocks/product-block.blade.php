@php
/** 
 * Name:
 * Product Block
 * 
 * Description: 
 * Display block with some product information and let direct add to basket
 * 
 * Data:
 * Title
 * Price
 * Image
 * Permalink
 * Add to basket - Link
 * 
 * Storybook: /blocks/product-block 
 * Styles: /blocks/product-block
 * */    

    $title = '';
    $price = '';
    $image = '';
    $permalink = '';
    $addToBasket = '';

@endphp

<a class="product-block" href="">
    <header class="product-block__header">
        <h3 class="product-block__title subtitle light">
            Title
        </h3>
        <span class="title bold">
            976.75
        </span>
    </header>
    <img src="/" alt="/">
    <footer class="product-block__footer">
        <a href="">
            <span class="icon icon--plus"></span>
        </a>
    </footer>
</a>