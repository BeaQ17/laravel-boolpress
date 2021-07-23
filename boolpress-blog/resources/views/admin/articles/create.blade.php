@extends("layouts.admin")

@section("content")
<div class="card">
    <h1>Write new article</h1>
    <form action="{{route("admin.articles.store")}}" method="POST">
    @csrf

    <div class="form-group">

        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Write a title" aria-describedby="titleHelper">
        <small id="titleHelper" class="text-muted">Keep it small, max 255 characters</small>

        <label for="subtitle">Subtitle</label>
        <input type="text" name="subtitle" id="subtitle" class="form-control" placeholder="Write a subtitle" aria-describedby="titleHelper">
        <small id="titleHelper" class="text-muted">Keep it small, max 255 characters</small>

        <label for="image">Add an image</label>
        <input type="file" name="image" id="image">
        @error("image")
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <label for="text">Text</label>
        <input type="textarea" name="text" id="text" class="form-control" placeholder="Write the article" aria-describedby="titleHelper">
    </div>

    <button type="submit">Done</button>
    
    </form>
</div>

@endsection