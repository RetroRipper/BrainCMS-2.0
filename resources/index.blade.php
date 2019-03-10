@extends('layouts.app')

@section('title', 'Index')

@section('content')

<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="card-top">{{ __('Login') }}</div>
				<form method="POST" action="{{ route('login') }}">
					@csrf
					<div class="form-group">
						<label>{{ __('email') }}</label>
						<input id="text" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
						@if ($errors->has('email'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group">
						<label>{{ __('Password') }}</label>
						<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
						@if ($errors->has('password'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
							<label class="form-check-label" for="remember">
								{{ __('Remember Me') }}
							</label>
						</div>
					</div>
					<div class="form-group mb-0">
						<button type="submit" class="btn btn-primary btn-block">
							{{ __('Login') }}
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card-body indexRight">
			<h1>Welcome to {{ config('hotel.hotel_name') }}</h1>
			<p>{{ config('hotel.hotel_name') }} is more than a game! <br>Different characters, Friends, chatrooms, parties, virtual mascots, celebrities, music, concerts, decoration, games, challenges, leisure activities… the list goes on and on. Rise will make you have more fun than you’ve ever had. </p>
			<div class="row">
				<div class="col-md-4">
					<div class="indexicon indexicon1"></div>
				</div>
				<div class="col-md-4">
					<div class="indexicon indexicon2"></div>
				</div>
				<div class="col-md-4">
					<div class="indexicon indexicon3"></div>
				</div>
			</div>
		</div>
		<a href="{{ route('register') }}" class="bannerindex">
		NEW? JOIN TODAY, IT'S FREE!</a>
	</div>
</div>
@endsection