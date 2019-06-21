<ul class="attributes">
  @foreach ($attributes as $attribute)
  <li>
    <h3 class="attributes__title text text--small bold">
      {{ $attribute['title'] }}
    </h3>
    <p class="text text--small">
      {{ $attribute['desc'] }}
    </p>
  </li>
  @endforeach
</ul>
