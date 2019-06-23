@php
    $left = $data['left'];
    $image = $data['image']['ID'];
@endphp

<section class="section flex @if($left) flex--reverse @endif">
  <div class="flex__col">
      @include('blocks.text', ['data'=> $data])
  </div>
  <div class="flex__col">
    {!! image($image, 'full', 'flex__image') !!}
  </div>
</section>
