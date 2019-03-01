@extends('layouts.pages')

@section('title', 'Me')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="menu-user">
            	Credits:{{ Auth::user()->credits }} <br>
                Duckets:
                @foreach ($currency->where("type", "5") as $object)
                    {{ $object->amount }}
                @endforeach
                <br>
                Diamonds:
                @foreach ($currency->where("type", "0") as $object)
                    {{ $object->amount }}
                @endforeach
            </div>
        </div>
</div>
@endsection
