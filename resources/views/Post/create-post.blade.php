@extends('layouts.app')

@section('title', 'About')

@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">



                <h1>New Post</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('store') }}">

                    {{ csrf_field()  }}


                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" name="description" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Create New Post">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>
@endsection
