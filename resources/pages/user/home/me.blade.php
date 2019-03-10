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
                            <div class="home-user-details-username"> {{ $user->username }}</div>
                            <div class="home-user-details-motto"><b>Motto:</b> {{ Auth::user()->motto }}</div>
                        </div>
                    </div>
                    <div class="col-md-6 nopadding-left">
                        <a href="/client" class="home-user-hotelbutton hotel-button" id="ga-linkid-hotel"><span class="hotel-button__text">Hotel</span></a>
                    </div>
                </div>
                <div style="padding-top: 10px;" class="row">
                    <div class="col-md-3 nopadding-left">
                        <div class="home-user-details-credits">{{ $user->credits }}</div>
                    </div>
                    <div class="col-md-3 nopadding-left">
                        <div class="home-user-details-duckets">{{ $currency->where("type", 0)->first()->amount  ?? 0}}</div>
                    </div>
                    <div class="col-md-3 nopadding-left">
                        <div class="home-user-details-diamonds">{{ $currency->where("type", 5)->first()->amount ?? 0 }}</div>
                    </div>
                    <div class="col-md-3 nopadding-left">
                        <div class="home-user-details-hc">31 Days</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            @include('components.news')
        </div>
    </div>

@endsection