@php
  $args = array(
    'taxonomy' => 'product_cat',
    'hide_empty' => false,
    parent => $cat_id
  );



  if($parent_id) {
    $args = array(
    'taxonomy' => 'product_cat',
    'hide_empty' => false,
    parent => $parent_id
  );
  }

  $tags = get_terms( $args );

  function currentCategory($id, $cat_id) {
    if($id == $cat_id) {
      return '-is-active';
    }
  }
@endphp


<ul class="tags">

  <li class="tags__elem">
    <a
      href="{{ get_term_link($parent_id) }}"
      class="tag {{ currentCategory($parent_id, 0) }}
    ">
      {{ __('wszystkie', 'brusso') }}
    </a>
  </li>

  @if ($tags)
    @foreach ($tags as $tag)
    <li class="tags__elem">
      <a href="{{ get_term_link($tag -> term_id) }}"
        class="tag {{ currentCategory($tag -> term_id, $cat_id) }}">
        {{ $tag -> name }}
      </a>
    </li>
    @endforeach
  @endif
</ul>
