@extends("layouts.app")

@section("content")

    @foreach ($articles as $article)
        <div class="container">
            <div class="row">
                <div class="col-3">
                  <p>{{$article->id}}</p>
                </div>
                <div class="col-6">
                    <h4>{{$article->title}}</h4>
                    <p>{{$article->author}}</p>
                    <p>{{$article->date}}</p>
                </div>
                <div class="col-3">
                  <h4>
                    <a href="{{route("admin.articles.show", $article->id)}}"><i class="far fa-eye"></i></a>  | 
                    <a href="{{route("admin.articles.edit", $article->id)}}"><i class="far fa-edit"></i></a> | 
                    <a href="{{route("admin.articles.destroy", $article->id)}}"><i class="far fa-trash-alt"></i></a>
                  </h4>
                </div>
              </div>
              <hr>
        </div>
        
    @endforeach

@endsection