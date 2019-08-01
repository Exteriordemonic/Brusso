@php
  $categories = $product -> get_category_ids();
  $main_product = get_field('main_product')[0];

  $product_id_for_field = $main_product ? $main_product -> ID : get_the_ID();

  $attributes = get_field('atrybuty', $product_id_for_field);
  $color = get_field('color', $product_id_for_field)[0] -> post_title;

  $colors = get_field('products', $product_id_for_field);
@endphp

<div class="product-details">
  <header class="product-details__header">
    @include('blocks.single-product-tags', ['cats' => $categories])
  </header>
  <div class="product-details__description">
    <h1 class="product-details__title title bold">
      {{ $product -> get_title() }}
    </h1>
    <p class="text">
      {{ $product -> get_description() }}
    </p>
  </div>

  @if ($colors)
  <div class="product-details__colors">
    <h3 class="attributes__title text text--small bold">
      {{ __('Wybierz kolor') }}
    </h3>
    @include('blocks.colors', ['colors' =>  $colors])
  </div>
  @endif

  @if ($attributes)
  <div class="product-details__attributes">
    @include('blocks.attributes', ['attributes' => $attributes])
  </div>
  @endif
  <footer class="product-details__footer">
    <span class="title bold" data-price>
      {{ $product -> get_price() }}
    </span>
    <a data-add-to-basket class="button button--add" href="{{ $product->add_to_cart_url() }}">Kup teraz!</a>
  </footer>
</div>

{{-- @dump($categories) --}}
