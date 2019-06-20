{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

  @section('content')

  @php $sections = get_field('components') @endphp

  @if($sections)

  @foreach ($sections as $section)
    @php ($sectionName = $section['acf_fc_layout']) @endphp
  @endforeach
  @else

    @if( is_product_category())
      @include('woocommerce.taxonomy-product_cat')
    @endif

  @endif

@endsection
