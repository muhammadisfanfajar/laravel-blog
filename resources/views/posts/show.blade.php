@extends('layouts.master')

@section('content')
    @include('posts.post')

    <hr>

    <div class="comment">
        <ul class="list-group">
            @foreach ($post->comments as $comment)        
                <li class="list-group-item">
                    <strong> {{ $comment->created_at->diffForHumans() }} : &nbsp; </strong>
                    {{ $comment->body }}
                </li>        
            @endforeach
        </ul>
    </div>
    
    <hr>

    {{-- comment form --}}
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/post/' . $post->id . '/comment') }}" method="post">
                @csrf
                <div class="form-group">
                    <textarea name="body" id="" rows="5" class="form-control" placeholder="Your comment here" required>

                    </textarea>
                </div>

                <div class="form-group">
                    <input type="submit" value="Add Comment" class="btn btn-primary">
                </div>
            </form>

            @include('partials.errors')
        </div>
    </div>
@endsection
