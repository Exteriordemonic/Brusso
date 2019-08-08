{{--
  Template Name: PAGE-FAQ
--}}

@extends('layouts.app')

@section('content')
@include('layouts.components.hero', ['small'=>true])

  @php
      $data = get_field('dropdown');
  @endphp

  @includeWhen($data, 'layouts.components.faq', ['data' => $data])

@endsection


