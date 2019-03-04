@extends('layouts.pages')

@section('title', 'Me')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="menu-user">
                Username: {{ Auth::user()->username }}<br>
                Email: {{ Auth::user()->email }}<br>
                Credits: {{ Auth::user()->credits }}<br>
                Duckets: {{ $currency->where("type", 0)->first()->amount }}<br>
                Diamonds: {{ $currency->where("type", 5)->first()->amount }}
            </div>
        </div>
    </div>
@endsection