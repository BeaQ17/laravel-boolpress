@extends("layouts.app")

@section("content")

<div class="container">
    <h1>{{$article->title}}</h1>
    <h3>{{$article->subtitle}}</h3>
    <hr>
    <p>{{$article->date}} - {{$article->author}}</p>
    <hr>
    <p>{{$article->five_w}}</p>
    <hr>
    <p>{{$article->how_text}}</p>
</div>

<button href="{{route('articles.index')}}">Back to all articles</button>

@endsection