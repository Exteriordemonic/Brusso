<nav class="navigation">
  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
  @endif

  <a class="navigation__newsletter text" href="#newsletter"  data-toggle-popup>
    .newsletter
  </a>

  @php
      $socialMediaIcons = get_field('icons','options');
  @endphp

  @if($socialMediaIcons)
  <ul class="navigation__social-media social-media">
    @foreach ($socialMediaIcons as $icon)
    <li class="social-media__elem">
      <a href="{{ $icon['link'] }}">
        <span class="{{ $icon['icon'] }}"></span>
      </a>
    </li>
    @endforeach
  </ul>
  @endif

  <p class="navigation__copyright text">
    © Brusso / made by: <a href="mailto:kmirosz6@gmail.com">mirosz development</a>
  </p>
</nav>
