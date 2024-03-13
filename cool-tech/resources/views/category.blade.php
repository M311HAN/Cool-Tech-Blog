
<!-- Uses a custom layout component for consistent page structure -->
<x-layout>
    <div class="style">
        <h1>Category: {{$articles[0]->category}}</h1>
        <div>
            <ul>
                @foreach ($articles as $article)
                    <!-- Each list item links to its respective article page -->
                    <li><a class="underline" href="/article/{{$article->id}}">{{$article->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layout>