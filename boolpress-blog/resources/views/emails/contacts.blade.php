<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Email</title>
</head>
<body>

    <div class="container">
        <h1>New message!</h1>
        <h3>From {{$data["email"]}}</h3>
        <h3>Message text:</h3>
        <p>{{$data["message"]}}</p>
    </div>
    
</body>
</html>