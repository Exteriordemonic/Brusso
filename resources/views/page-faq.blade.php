{{--
  Template Name: PAGE-FAQ
--}}

@extends('layouts.app')

@section('content')
@include('layouts.components.hero', ['small'=>true])
  <section class="section-faq">
    <ul class="section-faq__list">
      <li class="section-faq__elem">
        @include('blocks.dropdown')
      </li>
    </ul>
  </section>
@endsection
