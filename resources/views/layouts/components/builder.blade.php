@php
  $main_product = get_field('main_product')[0];

  $product_id_for_field = $main_product ? $main_product -> ID : get_the_ID();

  $builder = get_field('components', $product_id_for_field);
@endphp

@if ($builder)
  @foreach ($builder as $section)

    @php
      $sectionName = $section['acf_fc_layout'];
    @endphp

    @include('layouts.components.' . $sectionName, ['data' => $section])

  @endforeach
@endif





