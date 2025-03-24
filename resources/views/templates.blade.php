<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>WebMaker | Templates</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>


<nav class="navbar navbar-expand-lg">
  <div class="container-fluid navbar">
    <h2><a class="navbar-brand fs-4" href="home">WebMaker</a></h2>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle na0gation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-decoration-unerline " href="about">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="templates">Templates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


@auth
        <p>Welcome {{ Auth::user()->name }}!</p>
        <p>You are succesfully logged in.</p>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit">Logout</button>
      </form><br>
      <h2>Previously Generated HTML Files</h2>
        @if(count($generatedFiles) > 0)
            <ul>
                @foreach($generatedFiles as $file)
                    <li>
                        <a href="{{ storage_path('app/users/' . Auth::id() . '/' . $file) }}" download>{{ $file }}</a>
                    </li>
                @endforeach
            </ul>
            <a href="templatesForm" class="btn tbn-primary">Make another website</a>
        @else
            <p>No files generated yet.</p>
            <a href="templatesForm" class="btn tbn-primary">Make your first website</a>
        @endif
        <p>You have generated {{ Auth::user()->files_generated }} file(s).</p>
    @endauth

    @guest
        <p>You are not logged in. <a href="{{ route('login') }}">Login</a></p>
    @endguest
</body>
</html>