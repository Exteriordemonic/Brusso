@php
    $item = $data;
    $title = $item['header']['title'];
    $content = $item['header']['content'];
    $questions = $item['questions'];
@endphp

<article class="dropdown" data-dropdown>
    <header class="dropdown__header">
      <div class="dropdown__header-wrapper">
        <h2 class="dropdown__title">
          {{ $title }}
        </h2>
        <p class="dropdown__description">
          {!! $content !!}
        </p>
      </div>
      <div class="dropdown__icon">
        <button class="icon icon--plus icon--dark" data-toggle-button></button>
      </div>
    </header>
    @if ($questions)
    <ul class="dropdown__content">
      @foreach ($questions as $question)
      <li class="dropdown__elem">
          <h3 class="dropdown__question">
            {{ $question['title'] }}
          </h3>
          <p class="dropdown__answear text">
            {!! $question['content'] !!}
          </p>
      </li>
      @endforeach
    </ul>
    @endif
</article>
