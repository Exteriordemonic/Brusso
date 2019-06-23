@php
  $phone = get_field('phone','options');
  $mail = get_field('mail','options');

  $sm = get_field('icons');
@endphp

<header class="header" header>
  <div class="header__wrapper">
    <a class="header__brand" href="{{ home_url('/') }}">
      <img src="@asset('/images/logo.png')" alt="Brusso">
    </a>
    <nav class="header__nav">
      @include('blocks.icon-nav')
    </nav>
  </div>
</header>
