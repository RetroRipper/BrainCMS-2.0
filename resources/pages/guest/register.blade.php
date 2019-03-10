@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h5 class="header">{{ __('Login') }}</h5>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label>{{ __('Username') }}</label>
                        
                        
                        <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>
                        
                        @if ($errors->has('username'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>{{ __('E-email Address') }}</label>
                        
                        
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>{{ __('Motto') }}</label>
                        
                        
                        <input id="motto" type="text" class="form-control{{ $errors->has('motto') ? ' is-invalid' : '' }}" name="motto" value="{{ old('motto') }}" required>
                        
                        @if ($errors->has('motto'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('motto') }}</strong>
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
                        <label>{{ __('Confirm Password') }}</label>
                        
                        
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        
                    </div>
                    
                    <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Register') }}
                            </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


