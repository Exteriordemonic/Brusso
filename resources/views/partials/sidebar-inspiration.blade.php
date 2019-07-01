<nav class="navigation">
  @if (has_nav_menu('inspiration_navigation'))
    {!! wp_nav_menu(['theme_location' => 'inspiration_navigation', 'menu_class' => 'nav']) !!}
  @endif
</nav>
