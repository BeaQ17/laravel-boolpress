@extends("layouts.app")

@section("content")


<div class="container">
  <div class="new">
    <button class="btn btn-primary" href="{{route('admin.articles.create')}}">Write new post</button>
  </div>

  @foreach ($articles as $article)
        
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
                  <a href="{{route("admin.articles.destroy", $article->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <i class="fas fa-trash fa-sm fa-fw"></i>
                  </a>
              </h4>
          </div>
          <hr>
      </div>
        
  @endforeach
</div>

@endsection