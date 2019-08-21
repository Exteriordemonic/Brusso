@php
    global $woocommerce;
    

    // foreach($items as $item => $values) {
    //     $_product =  wc_get_product( $values['data']->get_id());
    //     echo "<b>".$_product->get_title().'</b>  <br> Quantity: '.$values['quantity'].'<br>';
    //     $price = get_post_meta($values['product_id'] , '_price', true);
    //     echo "  Price: ".$price."<br>";
    // }

    if($_GET['remove_item']) {
      WC()->cart->remove_cart_item($_GET['remove_item']);
    }

    $items = $woocommerce->cart->get_cart();
@endphp

<div class="mini-cart" data-mini-card id="mini-card">
  <button class="mini-cart__close" data-close-mini-card>
    <span class="icon icon--x icon--dark"></span>
  </button>
  @if($items)
    <ul class="mini-cart__products">
      @foreach ($items as $item)
        <li class="mini-cart__product">
          @include('blocks.mini-product', ['product'=>$item])
        </li>
      @endforeach
    </ul>
  @endif

  <footer class="mini-cart__footer">
    <div class="mini-cart__subtotal">
      <span class="text bold">
        SUBTOTAL:
      </span>
      <span class="mini-cart__price text" data-price>
        {{ WC()->cart->get_subtotal() }}
      </span>
    </div>
  </footer>
  <a class="mini-cart__checkout title bold" href="{{ $woocommerce->cart->get_checkout_url() }}">CHECKOUT</a>
  <a class="mini-cart__to-card text" href="{{ wc_get_cart_url() }}">Przejdź do koszyka</a>
</div>


