@php
    $title = $data['title'];
    $content = $data['content'];
@endphp

<div class="text-block">
  <h2 class="text-block__title title bold">
    {{ $title }}
  </h2>
  <p class="text-block__content subtitle">
    {{ $content }}
  </p>
</div>
