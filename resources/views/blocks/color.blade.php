@php
    $product_id = $color -> ID;
    $link = get_permalink($product_id);
    $currentID = $ID ? $ID : get_the_ID();

    $active = $currentID === $product_id ? true : false;

    $image = get_field('product-list', $product_id);
    $color_post = get_field('color', $product_id)[0];
    $color_post_id = $color_post -> ID;
    $color_img = get_post_thumbnail_id( $color_post_id );

    $index = $loop->index;
@endphp

<a href={{$link}} class="color @if($active) -is-active @endif" data-color-index={{ $ID . '-' . $index}}>
    {!! image($color_img, "color", "color__image") !!}
</a>