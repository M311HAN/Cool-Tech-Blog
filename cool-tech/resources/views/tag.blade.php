
<!-- Structure for displaying articles associated with a specific tag -->
<x-layout>
    <div class="style">
        <!-- Displays the current tag -->
        <h1>Tag: &#35;{{ $tag }}</h1>
        <!-- Lists articles under this tag -->
        <div>
            <ul>
                @foreach ($articles as $article)
                    <!-- Each list item is a link to the article's page -->
                    <li><a class="underline" href="/article/{{$article->id}}">{{$article->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layout>