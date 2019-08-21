@php
  $args = array(
    'post_type' => 'product',
    'numberposts' => 999,
    'tax_query'             => array(
        array(
            'taxonomy'      => 'product_cat',
            'field' => 'term_id', //This is optional, as it defaults to 'term_id'
            'terms'         => $cat_id,
            'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
        ),
    )
  );

  $products = get_posts($args);
@endphp

@if($products)
<ul class="products" id="products">
  @foreach ($products as $product)

  @php 
    $main_product = get_field('main_product', $product->ID)[0];
  @endphp

  @if (!$main_product)
  <li class="products__elem">
    @include('blocks.product', ['product' => $product])
  </li>
  @endif
  @endforeach
</ul>
@endif
