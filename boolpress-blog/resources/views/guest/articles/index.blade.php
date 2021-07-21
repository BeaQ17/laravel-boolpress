@extends("layouts.app")

@section("content")

    @foreach ($articles as $article)
        <div class="container">
            <div class="preview">
                <h2 class="title">{{$article->title}}</h2>
                <h4 class="subtitle">{{$article->subtitle}}</h4>
                <hr>
                <p>5W's:</p>
                <p>{{$article->five_w}}</p>
                <hr>
                <p>{{$article->author}} - {{$article->date}}</p>
            </div>
        </div>
        
    @endforeach

@endsection