<div class="blog-post">
    <a href="{{ url('post/' . $post->id) }}"> <h2 class="blog-post-title"> {{ $post->title }} </h2> </a>

    <p class="blog-post-meta"> {{ $post->created_at->toFormattedDateString() }} by <a href="#">{{ $post->user->name }}</a></p>

    @if ($post->tags->count())
        <ul>
            @foreach ($post->tags as $tag)
                <li>
                    <a href="{{ url('post/tag/'. $tag->name ) }}">{{ $tag->name }}</a>
                </li>
            @endforeach
        </ul>
    @endif

    {!! $post->body !!}    
</div>