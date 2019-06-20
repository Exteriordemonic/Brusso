@php
  $cat = get_queried_object();

  $cat_id = $cat -> term_id;
@endphp

@include('layouts.components.hero')
@include('layouts.components.shop', ['cat_id' => $cat_id])
