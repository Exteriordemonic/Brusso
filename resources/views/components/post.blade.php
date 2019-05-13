<article class="post">
    <a class="post__wrapper" href="{{ get_permalink() }}">
        <div class="post__image-wrapper">
            @if(has_post_thumbnail()) 
            {!! get_the_post_thumbnail('', 'medium', array('class'=> 'post__image')) !!}
            @else
            <img class="post__image" src="https://placeimg.com/640/480/nature" alt="">
            @endif
            <div class="post__hover">
                <span class="post__icon subtitle">
                    @include('svg.glasses')
                    CZYTAJ WIĘCEJ
                </span>
            </div>
        </div>
        <div class="post__content">
            <header class="post__header">
                <h2 class="subheeader">
                    {{ the_title() }}
                </h2>
            </header>
            <p class="post__excerpt secondary-body">
                {{ esc_html(get_the_excerpt()) }}[...]
            </p>
            <footer class="post__footer">
                <p class="post__date secondary-body">
                    {{ get_the_date('d/m/Y') }}
                </p>
            </footer>
        </div>
    </a>
</article>