@php
  global $woocommerce;
  $count = $woocommerce->cart->cart_contents_count;
@endphp
<ul class="icon-nav">
  <li class="icon-nav__elem">
    <a class="icon-nav__icon" href="">
      <img class="icon-nav__img" src="@asset('/images/Account.png')" alt="Moje konto">
    </a>
  </li>
  <li class="icon-nav__elem">
    <a class="icon-nav__icon icon-nav__icon--basket" href="{{ wc_get_cart_url() }}">
      <img class="icon-nav__img" src="@asset('/images/basket.png')" alt="Koszyk">
      <span class="icon-nav__count" data-basket-count>
        {{ $count }}
      </span>
    </a>
  </li>
</ul>
