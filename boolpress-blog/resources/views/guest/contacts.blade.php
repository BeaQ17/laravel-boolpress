@extends("layouts.app")

@section("content")

<div class="container">
    <h1>Contact Me</h1>
    <hr>
    <form action="{{route("contacts.send")}}" method="post">
        @csrf
        <div class="form-group">
            <!-- Name -->
            <label for="name">Your name:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Name Surname" aria-describedby="fullNameHelpe" minlength="5" maxlenght="255" value="{{old('full_name')}}" required>

            <!-- email -->
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="emailaddress@example.com" aria-describedby="emailHelpId" value="{{old('email')}}" required>

            <!-- message -->
            <div class="form-group">
                <label for="message">Message text:</label>
                <textarea class="form-control" name="message" id="message" rows="5">{{old('message')}}</textarea>
            </div>
      
            <button type="submit" class="btn btn-success">Send message</button>
        </div>
    </form>
</div>

@endsection