@if ($colors)

<ul class="colors" data-color-list-id={{$ID}}>
    @foreach ($colors as $color)
    <li class="colors__elem" data="{{ $loop->index }}">
        @include('blocks.color', ['color' =>  $color, 'ID'=> $ID, 'index' => $loop->$index])
    </li>
    @endforeach
</ul>

@endif
