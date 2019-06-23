@php
  $builder = get_field('components');
@endphp

@if ($builder)
  @foreach ($builder as $section)

    @php
      $sectionName = $section['acf_fc_layout'];
    @endphp

    @include('layouts.components.' . $sectionName, ['data' => $section])

  @endforeach
@endif





