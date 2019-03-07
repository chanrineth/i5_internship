<form method="POST" action="{{ route('store') }}">

    {{ csrf_field()  }}

    @if(isset($post))
        <input type="hidden" name="id" value="{{ $post->id }}"/>
    @endif

    <div class="form-group">
        <label>Title</label>
        <input type="text"
               name="title"
               @if(isset($post))
               value="{{ $post->title }}"
               @endif
               class="form-control"/>
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea rows="4" name="description" class="form-control">@if(isset($post)){{ $post->description }}@endif</textarea>
    </div>

    <div class="form-group">
        <label>User</label>
        <select class="form-control" name="user_id">
            @foreach($users as $user)
                @if(isset($post))
                    @if($user->id == $post->user->id)
                        <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                    @else
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endif
                @else
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Categories</label>
        <select class="form-control" name="categories[]" multiple>
            @foreach($categories as $category)
                @if(isset($post))
                    @php $found = false; @endphp
                    @foreach($post->categories as $eachPostCategory)
                        @if($category->id == $eachPostCategory->id)
                            @php $found = true @endphp
                            @break
                        @endif
                    @endforeach
                    @if($found)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
            @endforeach
        </select>
    </div>


    <div class="form-group">
        @if(isset($post))
            <input type="submit" class="btn btn-primary" value="update Post">
        @else
            <input type="submit" class="btn btn-primary" value="Create Post">
        @endif
    </div>
</form>
