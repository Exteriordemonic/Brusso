@php
  $_product = wc_get_product( $product['data']->get_id());
@endphp

<div class="mini-product">
  <a href="{{ get_permalink($_product->get_id()) }}">
    <img class="mini-product__image" src="@asset('images/sofa00.png')" alt="">
  </a>
  <a href="{{ get_permalink($_product->get_id()) }}" class="mini-product__desciption">
    <h3 class="mini-product__title text bold">
      {{ $_product->get_title() }}
    </h3>
    <p class="mini-product__price text">
      {{ $product['quantity'] }} x <span data-price>{{ $_product->get_price() }}</span>
    </p>
  </a>
  <a href="{{ wc_get_cart_remove_url( $product['key'] ) }}" class="mini-product__remove" remove-from-cart>
    <img src="@asset('images/remove.png')" alt="usuń z koszyka">
  </a>
</div>
