@php
  $phone = get_field('phone','options');
  $mail = get_field('mail','options');

  $sm = get_field('icons');
@endphp

<header class="header" header>
  <div class="container">
    <div class="row">
      <div class="col header__wrapper">
        <a class="header__brand" href="{{ home_url('/') }}">
          <img src="@asset('/images/logo.png')" alt="Brusso">
        </a>
        </nav>
      </div>
    </div>
  </div>
</header>
