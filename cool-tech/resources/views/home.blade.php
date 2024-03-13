
<!-- Wraps content in a custom layout for consistent appearance -->
<x-layout>
    <div class="style">
        <!-- Displays a failure message from the session if present -->
        @if (session()->has('failure'))
        <div>
            {{ session('failure') }}
        </div>
        @endif
        <!-- Iterates over articles to display their details -->
        @foreach ($articles as $article)
            <!-- Article title as a link -->
            <h1><a href="/article/{{$article->id}}">{{$article->title}}</a></h1>
            <!-- Article body snippet or full text -->
            <p>{{$article->body}}</p>
            <!-- List of tags associated with the article -->
            <div class="tags">
                @foreach ($article->tags as $tag)
                    <span class="tag"><a href="/tag/{{Str::slug($tag)}}">&#35;{{$tag}}&nbsp;</a></span>
                @endforeach<br>
            </div>
            <!-- Display article's creation date -->
            <div class="small-created_at">
                <small>Created At:&nbsp;&nbsp;&nbsp;<strong>{{$article->creation_date}}</strong></small>
            </div>
        @endforeach
    </div>
</x-layout>