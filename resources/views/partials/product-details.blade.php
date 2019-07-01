@php
  $categories = $product -> get_category_ids();

  $attributes = get_field('atrybuty');
@endphp

<div class="product-details">
  <header class="product-details__header">
    @include('blocks.single-product-tags', ['cats' => $categories])
  </header>
  <div class="product-details__description">
    <h1 class="product-details__title title bold">
      {{ $product -> get_title() }}
    </h1>
    <p class="subtitle">
      {{ $product -> get_description() }}
    </p>
  </div>
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
