@extends("layouts.admin")

@section("content")
<div class="card">
    <h1>Edit article</h1>
    <form action="{{route("admin.articles.update")}}" method="post">
    @csrf
    @method("PUT")
        <div class="form-group">

            <!-- title -->
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Write a title" aria-describedby="titleHelper" value="{{$article->title}}" required minlength="5" maxlength="255">
            <small id="titleHelper" class="text-muted">Keep it small, max 255 characters</small>

            <!-- Subtitle -->
            <label for="title">Subtitle</label>
            <input type="text" name="subtitle" id="subtitle" class="form-control" placeholder="Write a subtitle" aria-describedby="titleHelper" value="{{$article->subtitle}}" maxlength="255">
            <small id="titleHelper" class="text-muted">Keep it small, max 255 characters</small>

            <!-- Date -->
            <label for="date">Date</label>
            <input type="text" name="date" id="date" class="form-control" placeholder="Which day is it?" aria-describedby="titleHelper" value="{{$article->date}}" required>

            <!-- author -->
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" placeholder="Who takes credit for this?" aria-describedby="titleHelper" value="{{$article->author}}" required>

            <!-- five w -->
            <label for="title">Five Ws</label>
            <input type="text" name="five_w" id="five_w" class="form-control" placeholder="Write the five Ws" aria-describedby="titleHelper" value="{{$article->five_w}}" required minlength="5">
            <small id="titleHelper" class="text-muted">When, Where, Who, What, Why - try two/three words each</small>

            <!-- text -->
            <label for="title">Text</label>
            <input type="textarea" name="how_text" id="how_text" class="form-control" placeholder="Write the article" aria-describedby="titleHelper" value="{{$article->how_text}}" required minlength="255">
        </div>

        <button type="submit" class="btn btn-success">Done</button>
    
    </form>
</div>

@endsection