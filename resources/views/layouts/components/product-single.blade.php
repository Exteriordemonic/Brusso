@php
    $prod =  wc_get_product( get_the_ID() );
@endphp

<section class="product-single" id="product-single">
  <div class="product-single__col">
    @include('blocks.product-gallery', ['prod' => $prod])
  </div>
  <div class="product-single__col">
    @include('partials.product-details', ['prod' => $prod])
  </div>
</section>

@include('layouts.components.builder')
