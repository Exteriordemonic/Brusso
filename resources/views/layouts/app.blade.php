<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp style="overflow-x: hidden">
    @php do_action('get_header') @endphp
    @include('partials.preloader')
    @include('partials.sing-in-newsletter')
    @include('partials.header')
    @include('partials.mini-cart')
    <div class="wrap" role="document">
      <div class="content">
        <main class="main" data-main>
          @yield('content')
          @include('partials.footer')
        </main>
        <aside class="sidebar" data-nav>
          @include('partials.sidebar')
        </aside>
      </div>
    </div>
    @php do_action('get_footer') @endphp

    @php wp_footer() @endphp
  </body>
</html>
