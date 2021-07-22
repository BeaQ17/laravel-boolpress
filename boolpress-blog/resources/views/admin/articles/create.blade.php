@extends("layouts.admin")

@section("content")
<div class="new_card">
    <h1>Write new article</h1>
    <form action="{{route("admin.articles.store")}}" method="POST">
    @csrf

    <div class="form-group">

        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Write a title" aria-describedby="titleHelper">
        <small id="titleHelper" class="text-muted">Keep it small, max 255 characters</small>

        <label for="title">Subtitle</label>
        <input type="text" name="subtitle" id="subtitle" class="form-control" placeholder="Write a subtitle" aria-describedby="titleHelper">
        <small id="titleHelper" class="text-muted">Keep it small, max 255 characters</small>

        <label for="title">Five Ws</label>
        <input type="text" name="five_w" id="five_w" class="form-control" placeholder="Write the five Ws" aria-describedby="titleHelper">
        <small id="titleHelper" class="text-muted">When, Where, Who, What, Why - try two/three words each</small>

        <label for="title">Text</label>
        <input type="textarea" name="how_text" id="how_text" class="form-control" placeholder="Write the article" aria-describedby="titleHelper">
    </div>

    <button type="submit">Done</button>
    
    </form>
</div>

@endsection