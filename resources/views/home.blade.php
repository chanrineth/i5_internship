@extends('layouts.app')

@section('title', 'Home')


@section('content')

<!-- Main Content -->

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @if(isset($posts) && count($posts) > 0)
                @foreach($posts as $post)
                    <div class="post-preview">
                        <a href="{{ route('show', $post->id) }}">
                            <h2 class="post-title">{{ str_limit($post->title, 50) }}</h2>
                            <h3 class="post-subtitle">{{ str_limit($post->description, 100, " (see more)") }}</h3>
                        </a>
                        <p class="post-meta">Posted by
                            <a href="#">{{ $post->user->name }}</a>
                            on {{ (new \Carbon\Carbon($post->created_at))->diffForHumans() }} |
                            <a href="{{ route('edit', $post->id) }}">Edit</a> |
                            <a href="{{ route('delate', $post->id) }}">Delete</a> |
                            @if(count($post->categories) > 0)
                                @foreach($post->categories as $category)
                                    <span>{{ $category->name }}, </span>
                                @endforeach
                            @else
                                No category
                            @endif
                        </p>

                    </div>
                    <hr>
            @endforeach
        @endif
        <!-- Pager -->
            <div class="clearfix">
                {{ $posts->links() }}
                @if(($posts->lastPage() != $posts->currentPage()))
                    <a class="btn btn-primary float-right" href="{{ $posts->nextPageUrl() }}">Older Posts &rarr;</a>
                @endif
                @if(!$posts->onFirstPage())
                    <a class="btn btn-primary float-right" href="{{ $posts->previousPageUrl() }}">Previous Posts</a>
                @endif

            </div>
        </div>
    </div>
</div>

<hr>
@endsection