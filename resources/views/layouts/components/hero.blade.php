@php
    $placeholder = new Placeholder;

    if(is_product_category()) {
      $cat_id = get_queried_object() -> term_id;
      $header = get_field('header_cat', 'term_'.  $cat_id );
    }

    else  {
      $cat_id = $cat->term_id;
      $header = get_field('header', 'term_'.  $cat_id );
      $products = get_field('products', 'term_'.  $cat_id );
    }

    $image = get_field('bg_image', 'term_'.  $cat_id )['ID'];

    if(!$image) {
      $image = get_post_thumbnail_id();
      $header = get_the_title();
    }

@endphp



<section class="hero hero--{{ $template }} @if($small) hero--small @endif">
    <div class="container">
        <header class="hero__header">
            <h2 class="headline bold">
                {!! $header ? $header : $placeholder->title() !!}
            </h2>
            @if ($template == 'post')
                <button class="hero__button" data-scroll-to-post>
                    <span class="icon icon--arrow-down icon--special"></span>
                </button>
            @endif
        </header>
        @if($products)
        <ul class="hero__products">
            @foreach ($products as $product)

              @if ($loop -> index < 3)

                <li>
                  @include('blocks.product-block', ['product'=>$product])
                </li>

              @endif

            @endforeach
        </ul>
        @endif
    </div>
    @if($image)
        {!! image($image, 'full', 'hero__image') !!}
    @else
        <img class="hero__image" src="@asset($placeholder->image())" alt="Brusso">
    @endif

    @if ($template == 'post')
      <img class="hero__image hero__image--bg" src="@asset('images/inspiration.png')" alt="Brusso">
    @endif
</section>
