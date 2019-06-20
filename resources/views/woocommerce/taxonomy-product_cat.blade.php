@php
  $cat = get_queried_object();

  if($cat -> parent) $parent_id = $cat -> parent;
  $cat_id = $cat -> term_id;
@endphp

@include('layouts.components.hero')
@include('layouts.components.shop', ['cat_id' => $cat_id, 'parent_id ' => $parent_id ])
