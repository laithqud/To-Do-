<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex flex-column justify-content-center ms-5 mt-5">

    <h2>Log In</h2>
    <form class="w-25" action="/login" method="POST">
        @csrf
       
        <label for="email">Email:</label><br>
        <input class="w-100" type="text" name="email" id="email"><br>

    
        <label for="password">Password:</label><br>
        <input class="w-100" type="password" name="password" id="password"><br>


        <input class="mt-2 w-100 bg-primary text-light" type="submit" value="Login">

        @if($errors->any())
        <ul class="p-3 bg-danger">
            @foreach($errors->all() as  $error)
            <li class="m-2 text-light">{{$error}}</li>
            @endforeach
        </ul>
        @endif

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>