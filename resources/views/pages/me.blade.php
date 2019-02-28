@extends('layouts.pages')

@section('title', 'Me')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="menu-user">
            	Credits:{{ Auth::user()->credits }} <br>
            	Duckets:{{ $users_currency_duckets }}<br>
            	Diamonds:{{ $users_currency_diamonds }}
            </div>
        </div>
</div>
@endsection
