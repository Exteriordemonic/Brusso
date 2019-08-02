{{-- Images for each color loop --}}
@foreach ($colors as $item)
@php
    $color_image=get_field('product-list', $item -> ID)['url'];
    $index = $loop->index;
@endphp

@if ($index < 3) 

    @if ($color_image)
        <img class="product__image product__image--color" src="{{ $color_image }}" alt="{{ $title }}" data-color-image={{ $ID . '-' . $index }}>
    @else
        <img class="product__image product__image--color" src="@asset('/images/sofa001.png')" alt="{{ $title }}" data-color-image={{ $ID . '-' . $index }}>
    @endif

@endif
@endforeach
{{-- /Images for each color loop --}}