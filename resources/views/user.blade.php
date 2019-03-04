@extends('layouts.app')

@section('title', 'User')
@section('content')

    <!-- User -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h1>List all information about user </h1>

                @if(isset($users) && count($users) > 0)
                    @foreach($users as $user)
                        <li><a href="/user/{{ $user['id'] }}"> {{ $user ['id'] }} {{ $user ['name'] }} {{ $user ['sex'] }}</a> </li>
                    @endforeach
                @endif

            </div>
        </div>
    </div>

    <hr>
@endsection
