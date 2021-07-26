@extends("layouts.app")

@section("content")

<div class="container">
    <h1>{{$article->title}}</h1>
    <h3>{{$article->subtitle}}</h3>
    <hr>
    <p>{{$article->date}} - {{$article->author}}</p>
    <hr>
    <p>{{$article->image}}</p>
    <hr>
    <p>{{$article->text}}</p>

    <hr>

    <button class="btn btn-outline-secondary" href="{{route("guest.articles.index")}}">Back to all articles</button>

</div>



@endsection