@php
  $title = $data['title'];
  $products = $data['products'];
@endphp

<section class="section">
  <header class="section__header">
    <h2 class="title bold"> {{ $title }} </h2>
  </header>
  <div class="section__content">
    <ul class="products">
      @foreach ($products as $product)
      <li>
        @include('blocks.product', ['product' => $product])
      @endforeach
    </ul>
  </div>
</section>
