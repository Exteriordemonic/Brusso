@php
  $array = array(
    'taxonomy' => 'product_cat',
    'hide_empty' => false,
    parent => $cat_id
  );

  $tags = get_terms( $array );
@endphp

@if ($tags)
<ul class="tags">
  @foreach ($tags as $tag)
  <li class="tags__elem">
    <a href="{{ get_term_link($tag -> term_id) }}" class="tag">
      {{ $tag -> name }}
    </a>
  </li>
  @endforeach
</ul>
@endif
@dump($tags)
