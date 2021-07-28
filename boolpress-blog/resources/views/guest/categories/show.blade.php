@extends("layouts.app")

@section('content')
<div class="container">
    <h1>Articles in {{$category->name}}</h1>
</div>
<div>
    @forelse ($category->articles as $article)
    <div class="card">
        <h1>{{$article->title}}</h1>
        <h3>{{$article->subtitle}}</h3>
        <hr>
        <p>{{$article->date}} - {{$article->author}}</p>
        <hr>
        <p>{{$article->image}}</p>
        <hr>
        <p>{{$article->text}}</p>
    </div>
    <hr> 
    @empty
    <h1>Nothing here yet!</h1> 
    @endforelse
</div>

@endsection

<!--@@stop-->