@php sort($cats); @endphp
<ul class="tags">

  @if ($cats)
    @foreach ($cats as $cat)

    @php
      $cat = get_term_by('id', $cat, 'product_cat');
    @endphp

    <li class="tags__elem">
      <a href="{{ get_term_link($cat -> term_id) }}"
        class="tag tag--clear">
        {{ $cat -> name }}
      </a>
    </li>

    @endforeach
  @endif

</ul>



