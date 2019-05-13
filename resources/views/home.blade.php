@extends('layouts.app')

@section('content')
@php
    $section = get_field('components', 188);
    $hero = $section[0];
@endphp


   Home
  {!! get_the_posts_navigation() !!}
@endsection
