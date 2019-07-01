@extends('layouts.inspiration')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('layouts.components.hero', ['template'=>'post'])
    <section class="post-content" id="content">
      {{ the_content() }}
    </section>
    @include('partials.footer')
  @endwhile
@endsection