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

                            <a href="{{ route('show',$post->id) }}">
                                <h2 class="post-title">{{ $post->title }}</h2>
                                <h3 class="post-subtitle">{{ $post->description }}</h3>
                            </a>
                            <p class="post-meta">Posted by

                                <a href="#">{{$post->user->name}}</a>


                                on {{ (new \Carbon\Carbon($post->created_at))->diffForHumans() }}</p>|
                                <a href="{{ route('edit',$post->id) }}">Edit</a> |<a href="{{ route('delate',$post->id) }}">Delate</a>
                                @if(count($post->categories) > 0)
                                    @foreach($post->categories as $category)
                                        <span>{{ $category->name }}, </span>
                                    @endforeach
                                @else
                                    No category
                                @endif

                        </div>
                        <hr>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>

@endsection