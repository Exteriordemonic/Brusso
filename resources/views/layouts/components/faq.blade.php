@php
    $dropdown = $data;
@endphp

@if ($dropdown)
<section class="section-faq">
  <ul class="section-faq__list">
    @foreach ($dropdown  as $item)
      <li class="section-faq__elem">
        @include('blocks.dropdown', ['data'=>$item])
      </li>
    @endforeach
  </ul>
</section>
@endif
