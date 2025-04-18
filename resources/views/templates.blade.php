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
        <li class="nav-item">
          <a class="nav-link" href="contactUs">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


@auth
    <div class="tmLoggedIn">
      <h1>Welcome {{ Auth::user()->name }}!</h1>
        <p>You are succesfully logged in.</p>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button class="btn" type="submit">Logout</button>
        </form>
      </div><br>
      <h2>Previously Generated HTML Files</h2>
      @if($templates->isEmpty())
            <p>No templates found.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Header Title</th>
                        <th>Body Title</th>
                        <th>Description</th>
                        <th>Created</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($templates as $template)
                        <tr>
                            <td>{{ $template->HeaderTitle }}</td>
                            <td>{{ $template->BodyTitle }}</td>
                            <td>{{ Str::limit($template->BodyDescription, 255) }}</td>
                            <td>{{ $template->created_at->format('Y-m-d H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        <div class="make">
          <a href="templatesForm" class=" btn makeBtn">Make your website!</a>
        </div>
    @endauth

    @guest
        <div class="container notLoggedIn">
            <h1>You are not logged in.</h1><br> <a href="{{ route('login') }}" class="btn loginBtn">Login</a>
        </div>
    @endguest
</body>

<footer class="py-3">
  <ul class="nav justify-content-center pb-3 mb-3">
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
  </ul>
  <p class="text-center text-body-secondary">© 2024 Company, Inc</p>
</footer>

</html>