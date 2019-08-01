@php
    $product_id = $color -> ID;
    $link = get_permalink($product_id);

    $active = get_the_ID() === $product_id ? true : false;

    $color_post = get_field('color', $product_id)[0];
    $color_post_id = $color_post -> ID;
    $color_img = get_post_thumbnail_id( $color_post_id );
@endphp

<a href={{$link}} class="color @if($active) -is-active @endif" data-color={{$color_post}}>
    {!! image($color_img, "color", "color__image") !!}
</a>