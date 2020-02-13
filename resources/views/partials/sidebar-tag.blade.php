<div class="p-4">
    <h4 class="font-italic">Elsewhere</h4>
    <ol class="list-unstyled">
        @foreach ($tags as $tag)
            <li><a href="{{ url('post/tag/'. $tag->name ) }}">{{ $tag->name }}</a></li>
        @endforeach        
    </ol>
</div>