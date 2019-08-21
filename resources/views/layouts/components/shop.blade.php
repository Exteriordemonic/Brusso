<section id="shop" class="shop">
  <header class="shop__header">
    @include('blocks.tags', ['cat_id' => $cat_id, 'parent_id' => $parent_id])
  </header>
  <div class="shop__content" id="shop-content" data-shop-content>
    @include('partials.products', ['cat_id' => $cat_id])
  </div>
</section>
