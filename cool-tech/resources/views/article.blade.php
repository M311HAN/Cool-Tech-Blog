<!-- Layout wrapper for the article page -->
<x-layout>
    <div class="style">
        <h1>{{$theArticle->title}}</h1>
        <div>
            {!! $theArticle->body !!}
        </div>
        <div>
            <strong>Category:</strong> {{$theArticle->category}}
        </div>
        <!-- Tags associated with the article -->
        <div class="tags">
            @foreach ($theArticle->tags as $tag)
                <span class="tag"><a href="/tag/{{Str::slug($tag)}}">&#35;{{$tag}}&nbsp;</a></span>
            @endforeach
        </div>
        <!-- Article creation date -->
        <div>
            <small>Created At:&nbsp;&nbsp;&nbsp;<strong>{{$theArticle->creation_date}}</strong></small>
        </div>
    </div>
</x-layout>