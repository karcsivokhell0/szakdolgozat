<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>WebMaker | About</title>
    
    @vite(['resources/css/about.css', 'resources/js/app.js'])
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
          <a class="nav-link  text-decoration-unerline active" href="about">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="templates">Templates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br><br>

<div class="container about">
  <h1>About WebMaker</h1><br>
  <p>WebMaker is a free to use web aplication, that allow the clients that they can create their own websites easily and rapidly <br>We made our website client friendly so the clients can navigate themself in our site more easily</p>
</div>

<div class="container workers">
  <h1>About the workers</h1>
  <div class="row" id="cards">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card" id="card">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Galavics Gergő Balázs</h5>
          <p class="card-text">Administrative manager</p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card" id="center">
        <img class="card-img-top"src="{{url('/images/tablokep_ZK.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Zólyomi Károly</h5>
          <p class="card-text">Project manager</p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card" id="card">
        <img class="card-img-top" src="" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Sali Levente</h5>
          <p class="card-text">Technical manager</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<br><br>



<footer class="py-3">
  <ul class="nav justify-content-center pb-3 mb-3">
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
  </ul>
  <p class="text-center text-body-secondary">© 2024 Company, Inc</p>
</footer>
  
</div>
</body>
</html>