{{--
  Template Name: Content
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('layouts.components.hero', ['small'=>true])
    {{ the_content() }}
  @endwhile
@endsection
