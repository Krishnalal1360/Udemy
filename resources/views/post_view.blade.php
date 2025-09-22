<div>
    @foreach($posts as $post)
        {{-- 
        @can('update', $post)
            <div>
                <a href="{{ route('post.edit', $post->id) }}">{{ $post->title }}</a>
                <br
            </div>
        @endcan
        --}}
        {{--  
        <a href="{{ route('post.edit', $post->id) }}">{{ $post->title }}</a>
        <br>
        --}}
        
        @if(Auth::user() && Auth::user()->can('update', $post))
            <div>
                <a href="{{ route('post.edit', $post->id) }}">{{ $post->title }}</a>
                <br>
            </div>
        @endif
        
    @endforeach
</div