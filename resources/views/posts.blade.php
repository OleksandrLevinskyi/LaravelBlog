<x-layout>
    @foreach ($posts as $post)
        <article class="{{$loop->even?'foobar':''}}">
            <h1>
                <a href="/posts/{{$post->slug}}">{{$post->title}}</a>
            </h1>
            <p>
                By <a href="/author/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a>
            </p>
            <p>{{$post->excerpt}}</p>
        </article>
    @endforeach
</x-layout>
