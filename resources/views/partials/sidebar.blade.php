<nav class="navigation">
  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
  @endif
    {{-- <ul class="list">
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

    </ul> --}}
</nav>
