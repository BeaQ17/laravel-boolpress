@extends("layouts.admin")

@section("content")

<div class="container">
    <h1>{{$article->title}}</h1>
    <h3>{{$article->subtitle}}</h3>
    <hr>
    <p>{{$article->date}} - {{$article->author}}</p>
    <hr>
    <img src="{{asset('storage/' . $article->image)}}" alt="{{$article->title}}">
    <hr>
    <p>{{$article->text}}</p>
</div>

<button class="btn btn-outline-secondary"><a href="{{route("admin.articles.index")}}">Back to all articles</a></button>

@endsection