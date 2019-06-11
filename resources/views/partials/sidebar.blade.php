<nav class="navigation">
    <ul class="list">
        @php
          $product_cats = get_terms( 'product_cat', ['hide_empty' => true, 'parent ' => 0,] );
        @endphp

        @foreach ( $product_cats as $cat )

          <li class="list__elem">
              <a class="link subtitle" href="#">
                  SOFY
              </a>
          </li>

        @endforeach

    </ul>
</nav>
