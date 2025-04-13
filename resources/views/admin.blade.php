<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin page</title>
</head>
<body>
    @auth
    <h1>Welcome {{ Auth::user()->username}}</h1>
    
    @endauth
    @guest
        <h1>You don't have rights to be in this side</h1>
    @endguest

    
</body>
</html>