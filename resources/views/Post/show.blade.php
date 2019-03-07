@extends('layouts.app')

@section('title', 'Show')

@section('content')

    <!-- Services -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                    @if(isset($post) && !is_null($post))
                        <h3><strong>{{ $post->title }}</strong></h3>
                        {{ $post->description }}

                        <p>Placeholder text by
                            <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by
                            <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>
                    @endif
                <!-- Pager -->
                    <div class="clearfix">
                        <a class="btn btn-primary float-right" href="{{ route('service') }}">Back</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection