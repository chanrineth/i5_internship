@extends('layouts.app')

@section('title', 'Show User')

@section('content')
    <!-- About Section -->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1> Show user details </h1>


                        <li> {{ $userFound['name'] }}</li>


                </div>
            </div>
        </div>
    </section>


@endsection