@php
    $product =  wc_get_product( get_the_ID() );
@endphp

<section class="product-single" id="product-single">
  <div class="product-single__col">
    @include('blocks.product-gallery', ['product' => $product])
  </div>
  <div class="product-single__col">
    @include('partials.product-details', ['product' => $product])
  </div>
</section>

@include('layouts.components.builder')
