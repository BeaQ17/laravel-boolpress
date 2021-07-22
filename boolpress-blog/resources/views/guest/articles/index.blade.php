@extends("layouts.app")

@section("content")


<div class="guest_dash">
    <div class="card">
        <div class="top">
            <h1>Latest news</h1>
            <hr>
        </div>
        @foreach($articles as $article)
        <div class="card">
            <h3><a href="{{route("articles.show", $article->id)}}">{{$article->title}}</a></h3>
            <h4>{{$article->subtitle}}</h4>
            <p>{{$article->date}} - {{$article->author}}</p>
            <p>{{$article->five_w}}</p>
            <hr>
        </div>
        @endforeach
    </div>
</div>


@endsection