@php
    $img = $data['image']['ID'];
    $dots = $data['dots'];
@endphp

<section class="product-map">
  {!! image($img, 'full', 'product-map__image') !!}

  @foreach ($dots as $dot)
  <div class="product-map__button" style="left:{{ $dot['left'] }}%; top:{{ $dot['top'] }}%">
    <a href="{{ get_permalink($dot['products'][0]->ID) }}">
      <span class="icon icon--plus icon--special"></span>
    </a>
    <div class="product-map__product @if($dot['left'] > 50) product-map__product--left  @endif">
      @include('blocks.product-block', ['product'=>$dot['products'][0],'hideAdd'=>true])
    </div>
  </div>
  @endforeach

</section>
