@extends('layouts.app')

@section('title', 'User')

@section('content')
    <!-- About Section -->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1> List User </h1>

                    @foreach($users as $user)
                        <li><a href="user/{{ $user['id'] }}"> {{ $user['id'] }} {{ $user['name'] }} {{ $user ['sex'] }}</a> </li>
                    @endforeach

                </div>
            </div>
        </div>
    </section>


@endsection