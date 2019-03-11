@extends('layouts.app')

@section('title', 'Post')

@section('content')
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    @if(isset($post) && !is_null($post))
                        <h3><strong>{{ $post->title }}</strong></h3>
                        {{ $post->description }}

                        <p>Placeholder text by
                            <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by
                            <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>
                @endif
                <!-- Pager -->
                    <div class="clearfix">
                        <a class="btn btn-primary float-right" href="{{ route('home') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <hr>
@endsection
