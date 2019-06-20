@php
  $args = array(
    'post_type' => 'product',
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

<ul class="products">
  <li>
    {{-- @include('blocks.product') --}}
  </li>
</ul>

@dump($products)
