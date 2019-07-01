@php
    $posts = get_field('posts');
@endphp

<section class="post-slider">
    <div class="post-slider__wrapper">
        @if($posts)
        @foreach ($posts as $post)

        @php
            $ID = $post->ID;
            $image = get_post_thumbnail_id($ID);
        @endphp
        
        <a  href="{{ get_permalink($ID) }}" class="post-slider__cell">
            {!! image($image, 'full', 'post-slider__image')!!}
            <div class="post-slider__show-more">
                <span class="icon icon--arrow-down icon--special"></span>
                <span class="post-slider__read-more">
                    {{ e('Read more', 'Brusso') }}
                </span>
            </div>
            <h2 class="post-slider__title title bold">
                {{ $post->post_title }}
            </h2>
        </a>
        
        @endforeach 
        @endif
    </div>

    <img class="post-slider__bg" src="@asset('images/inspiration.png')" alt="Images">
</section>

