@extends('layouts.app')

@section('title', 'Show User')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h1>Page show user</h1>
                @if(is_null($userFound))
                    <h1>User not found!</h1>
                @else
                    <h1>{{ $userFound['name'] }} {{ $userFound['sex'] }}</h1>
                @endif
            </div>
        </div>
    </div>

    <hr>

@endsection
