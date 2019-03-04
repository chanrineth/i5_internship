@extends('layouts.app')

@section('title', 'Services')

@section('content')

<!-- Services -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                {{--<h2 class="section-heading text-uppercase">Services</h2>--}}
                {{--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>--}}

                @if(isset($posts) && count($posts) > 0)
                    @foreach($posts as $post)
                        <div class="post-preview">
                            <a href="post.html">
                                <h2 class="post-title">{{ $post->title }}</h2>
                                <h3 class="post-subtitle">{{ $post->description }}</h3>
                            </a>
                            <p class="post-meta">Posted by
                                <a href="#">Start Bootstrap</a>
                                on {{ (new \Carbon\Carbon($post->created_at))->diffForHumans() }}</p>
                        </div>
                        <hr>
                    @endforeach
                @endif
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection