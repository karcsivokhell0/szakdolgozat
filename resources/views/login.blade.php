<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>WebMaker | Login</title>
    
    @vite(['resources/css/login.css', 'resources/js/app.js'])
</head>
<body>


<nav class="navbar navbar-expand-lg">
  <div class="container-fluid navbar">
    <h2><a class="navbar-brand  fs-4" href="#">WebMaker</a></h2>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle na0gation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-decoration-unerline" href="about">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="templates">Templates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br><br><br><br>


<div class="container-fluid justify-content-center">
  <form class="container login" method="POST" action="{{ route('authenticate') }}">
    {{ @csrf_field() }}
    <h1>Login</h1>
    <div class="form-group">
      <input class="form-controll" type="text" name="name" placeholder="Name" required>
    </div>
    <div class="form-group">

      <input type="text" name="username" placeholder="Username" required>
    </div>
    <div class="form-group">

      <input type="email" name="email" placeholder="Email" required>
    </div>
    <div class="form-group">

      <input type="password" name="password" placeholder="Password" required>
    </div>
    <div class="row">
      <div class="from-group">
        <button class="btn btn-secondary">Login</button>
      </div>
    </div>
  </form>

  <div class="container registering">
    <div class="row">
      <div class="from-group">
        <h3>Don't have an account?</h3>
        <a class="btn btn-primary" href="register">register</a>
      </div>
    </div>
  </div>
</div>

<br><br><br><br>

<footer class="py-3">
  <ul class="nav justify-content-center pb-3 mb-3">
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
  </ul>
  <p class="text-center text-body-secondary">© 2024 Company, Inc</p>
</footer>
</body>
</html>