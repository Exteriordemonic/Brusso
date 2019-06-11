@php
    $placeholder = new Placeholder;

    $cat_id = $cat->term_id;
    $image = get_field('bg_image', 'term_'.  $cat_id )['ID'];
    $header = get_field('header', 'term_'.  $cat_id );

    $products = get_field('products', 'term_'.  $cat_id );
@endphp



<section class="hero">
    <div class="container">
        <header class="hero__header">
            <h2 class="headline bold">
                {!! $header ? $header : $placeholder->title() !!}
            </h2>
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
</section>
