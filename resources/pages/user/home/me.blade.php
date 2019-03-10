@extends('layouts.app')

@section('title', 'Me')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="home-user">
                <div class="home-user-avatar">
                    <img class="home-user-avatar-image" src="https://www.habbo.nl/habbo-imaging/avatarimage?figure={{ Auth::user()->look }}&head_direction=3&gesture=sml&size=l&headonly=1">
                </div>
                <div class="row">
                    <div class="col-md-6 nopadding-left">
                        <div class="home-user-details">
                            <div class="home-user-details-username"> {{ Auth::user()->username }}</div>
                            <div class="home-user-details-motto"><b>Motto:</b> {{ Auth::user()->motto }}</div>
                        </div>
                    </div>
                    <div class="col-md-6 nopadding-left">
                        <a href="/client" class="home-user-hotelbutton hotel-button" id="ga-linkid-hotel"><span class="hotel-button__text">Hotel</span></a>
                    </div>
                </div>
                <div style="padding-top: 10px;" class="row">
                    <div class="col-md-3 nopadding-left">
                        <div class="home-user-details-credits">{{ Auth::user()->credits }}</div>
                    </div>
                    <div class="col-md-3 nopadding-left">
                        <div class="home-user-details-duckets">{{ $currency->where("type", 0)->first()->amount }}</div>
                    </div>
                    <div class="col-md-3 nopadding-left">
                        <div class="home-user-details-diamonds">{{ $currency->where("type", 5)->first()->amount }}</div>
                    </div>
                    <div class="col-md-3 nopadding-left">
                        <div class="home-user-details-hc">31 Days</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <article class="news-header news-header--column">
                        <a href="/community/article/25533/this-march-habbo-basement-band" class="news-header__link news-header__banner">
                            <figure class="news-header__viewport">
                                <img src="https://images.habbo.com/web_images/habbo-web-articles/lpromo_band19_gen.png" class="news-header__image news-header__image--featured">
                                <img src="https://images.habbo.com/web_images/habbo-web-articles/lpromo_band19_gen_thumb.png" class="news-header__image news-header__image--thumbnail">
                            </figure>
                        </a>
                        <a href="/community/article/25533/this-march-habbo-basement-band" class="news-header__link news-header__wrapper">
                            <h2 class="news-header__title">BrainCMS 2.0</h2>
                        </a>
                        <aside class="news-header__wrapper news-header__info">
                            <time class="news-header__date">Mar 1, 2019</time>
                        </aside>
                        <p class="news-header__wrapper news-header__summary">Yes, you read that right! BrainCMS 2.0 is coming!</p>
                    </article>
                </div>
            </div>
        </div>
    </div>

@endsection