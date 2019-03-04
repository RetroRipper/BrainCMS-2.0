@extends('layouts.pages')

@section('title', 'Me')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="menu-user">
                <p>Credits: {{ $currency->where("type", 5)->first()->amount }}</p>
                <p>Duckets: {{ $currency->where("type", 0)->first()->amount }}</p>
            </div>
        </div>
</div>
@endsection
