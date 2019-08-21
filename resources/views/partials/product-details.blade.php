@php

  $categories = $prod -> get_category_ids();
  $main_product = get_field('main_product')[0];

  $prod_id_for_field = $main_product ? $main_product -> ID : get_the_ID();

  $attributes = get_field('atrybuty', $prod_id_for_field);
  $color = get_field('color', $prod_id_for_field)[0] -> post_title;

  $colors = get_field('products', $prod_id_for_field);
@endphp

<div class="product-details">
  <header class="product-details__header">
    @include('blocks.single-product-tags', ['cats' => $categories])
  </header>
  <div class="product-details__description">
    <h1 class="product-details__title title bold">
      {{ $prod -> get_title() }}
    </h1>
    <p class="text">
      {{ $prod -> get_description() }}
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


<?php

global $woocommerce, $post, $product;
$product = wc_get_product(get_the_ID());

if( $product->is_type( 'variable' ) ) {

  $attribute_keys  = array_keys( $attributes );
  $available_variations = $product->get_available_variations();

  $attr = $product->get_attributes();

  $variations_json = wp_json_encode( $available_variations );
  $variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : _wp_specialchars( $variations_json, ENT_QUOTES, 'UTF-8', true );

  while ( have_posts() ) : the_post();
    do_action('woocommerce_variable_add_to_cart');
  endwhile;
}
else { ?>
    <footer class="product-details__footer">
      <span class="title bold" data-price>
        {{ $prod -> get_price() }}
      </span>
      <a data-add-to-basket class="button button--add" href="{{ $prod->add_to_cart_url() }}">Kup teraz!</a>
    </footer>
<?php  }

?>

</div>

{{-- @dump($categories) --}}
