<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp style="overflow-x: hidden">
    <div class="preloader" preloader ></div>
    @php do_action('get_header') @endphp
    @include('partials.header')
    @include('partials.mini-cart')
    <div class="wrap" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        <aside class="sidebar">
          @include('partials.sidebar-inspiration')
        </aside>
      </div>
    </div>

    @php wp_footer() @endphp
  </body>
</html>
