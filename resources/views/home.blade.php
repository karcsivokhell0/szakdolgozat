<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
 
    

    <title>WebMaker | Home</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            <a class="nav-link active" aria-current="page" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-decoration-unerline" href="about">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="templates">Templates</a>
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



<br><br><br><br>
<header class="container-fluid main">
  <div class="container">
    <div class="row">
      <h1 class="text-center">Welcome To The WebMaker!</h1>
    </div>
  </div>
</header>

<br><br>

<div class="container-fluid inform">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6x asd">
        <h1>Create <span>YOUR</span> webslite like a <span>PRO</span></h1>
        <p>Ready to create a stunning website in minutes? Choose a template, customize it with ease, and launch your dream site like a pro—no coding required!</p>
        <button class="btn btn-primary">Get Started</button>
      </div>
      <div class="col-lg-6  col-md-6 image">
        <img class="rounded " src="https://www.digitalsilk.com/wp-content/uploads/2020/05/website-planning-hero-image.png">
      </div>
    </div>
  </div>
</div>

<div class="info">
  <div class="container asd">

    <div class="row">
      <h1>What do we offer?</h1>
    </div>

    <div class="row" id="cards">
      <div class="col-lg-4 col-md-4 col-sm-8">
        <div class="card" id="card">
          <div class="card-body">
            <h5 class="card-title">User friendly website</h5>
            <p class="card-text">We made our website user friendly so they can make their website easily</p>
            <a href="about" class="btn">About Us</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-8">
        <div class="card" id="center">
          <div class="card-body">
            <h5 class="card-title">Easy access to everyone</h5>
            <p class="card-text">Everyone can reach our website and can make a website for themself</p>
            <button class="btn btn-secondary" ><a href="templates">Templates</a></button>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-8">
        <div class="card" id="card">
          <div class="card-body">
            <h5 class="card-title">Free to use</h5>
            <p class="card-text">Everyone can make their own website without paying anything</p>
            <a href="register" class="btn">Register</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>


<footer class="py-3">
  <ul class="nav justify-content-center pb-3 mb-3">
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
  </ul>
  <p class="text-center text-body-secondary">© 2024 Company, Inc</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>