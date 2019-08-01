@if ($colors)

<ul class="colors">
    @foreach ($colors as $color)
    <li class="colors__elem">
        @include('blocks.color', ['color' =>  $color])
    </li>
    @endforeach
</ul>

@endif
