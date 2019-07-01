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

    @if(is_front_page())

    @php
      $section = get_field('components', 188);
      $hero = $section[0];
    @endphp

    @php
      $product_cats = get_terms( 'product_cat', ['hide_empty' => true, 'parent' => 0,] );
    @endphp

    @foreach ( $product_cats as $cat )
      @include('layouts.components.hero', ['cat' => $cat])
    @endforeach

      @endif

  @endif

@endsection
