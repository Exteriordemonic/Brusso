{{--
  Template Name: Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('layouts.components.hero', ['small'=>true])

    <section class="page-content">
      {{ the_content() }}
    </section>
  @endwhile
@endsection
