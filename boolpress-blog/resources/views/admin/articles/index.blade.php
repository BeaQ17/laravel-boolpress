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
                  <h4>View | Edit | Delete</h4>
                </div>
              </div>
        </div>
        
    @endforeach

@endsection