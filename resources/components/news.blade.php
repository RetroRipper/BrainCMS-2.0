@foreach ($news as $article)

    <article class="news-header news-header--column">
        <a href="/" class="news-header__link news-header__banner">
            <figure class="news-header__viewport">
                <img src="https://images.habbo.com/web_images/habbo-web-articles/lpromo_band19_gen.png" class="news-header__image news-header__image--featured">
                <img src="https://images.habbo.com/web_images/habbo-web-articles/lpromo_band19_gen_thumb.png" class="news-header__image news-header__image--thumbnail">
            </figure>
        </a>
        <a href="" class="news-header__link news-header__wrapper">
            <h2 class="news-header__title">{{$article->title}}</h2>
        </a>
        <aside class="news-header__wrapper news-header__info">
            <time class="news-header__date"></time>
        </aside>
        <p class="news-header__wrapper news-header__summary">{{$article->description}}</p>
    </article>

@endforeach
