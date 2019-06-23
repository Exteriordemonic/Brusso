@php
    $gallery = $product -> get_gallery_image_ids();
@endphp

<div class="slider">
  <div class="slider__carousel">
    @if($gallery)
    @foreach ($gallery as $img)

    <div class="carousel-cell">
      {!! image($img, 'full', 'slider__image') !!}
    </div>

    @endforeach
    @endif
  </div>
</div>

<!-- <div class="gallery">
      <img class="gallery__image" data-gallery-image="0" src="@asset('images/sofa-bg.jpg')" alt="" />
      <div class="gallery__zoom" data-gallery-zoom></div>
    </div> -->
