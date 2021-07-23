@extends("layouts.admin")

@section("content")
<div class="container">
    <h1>Edit article</h1>
    <form action="{{route("admin.articles.update", $article->id)}}" method="post">
    @csrf
    @method("PUT")
        <div class="form-group">

            <!-- title -->
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Write a title" aria-describedby="titleHelper" value="{{$article->title}}" required minlength="5" maxlength="255">

            <!-- Subtitle -->
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle" id="subtitle" class="form-control" placeholder="Write a subtitle" aria-describedby="titleHelper" value="{{$article->subtitle}}" maxlength="255">

            <!-- Date -->
            <label for="date">Date</label>
            <input type="text" name="date" id="date" class="form-control" placeholder="Which day is it?" aria-describedby="titleHelper" value="{{$article->date}}" required>

            <!-- author -->
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" placeholder="Who takes credit for this?" aria-describedby="titleHelper" value="{{$article->author}}" required>

            <!-- image -->
            <label for="image">Replace image</label>
            <img src="{{asset('storage/' . $article->image)}}" alt="">
            <input type="file" name="image" id="image">

            <!-- text -->
            <label for="title">Text</label>
            <textarea class="form-control" name="text" id="text" placeholder="Write the article" rows="5">{{$article->text}}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Done</button>
    
    </form>
</div>

@endsection