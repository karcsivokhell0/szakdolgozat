<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>


<nav class="navbar navbar-expand-lg">
  <div class="container-fluid navbar">
    <h2><a class="navbar-brand fs-4" href="#">WebMaker</a></h2>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle na0gation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Templates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact details</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<br><br><br><br>
<header class="container">
  <div class="content">
    <span id="blur"></span>
    <span id="blur"></span>
            
    <H1>Create <span>YOUR</span> website like a pro</H1>
    <p>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus rem eos aliquid quo rerum
    temporibus ipsum distinctio numquam ut omnis placeat, nam sint atque quos dolorem laborum? Rerum, esse
    dolorem.
    </p>
    <button class="btn">Get Started</button>
  </div>
  <div class="image">
    <img src="https://mytechdecisions.com/wp-content/uploads/2019/10/AdobeStock_256229414.jpg">
  </div>
</header>

<div class="info">
  <div class="container">

    <div class="row">
      <h1>What we offer?</h1>
    </div>

    <div class="row" id="cards">
  
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card" id="card">
          <div class="card-body">
            <h5 class="card-title">User friendly website</h5>
            <p class="card-text">We made our website user friendly so they can make their website easily</p>
            <a href="#" class="btn">About ourselves</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card" id="center">
          <div class="card-body">
            <h5 class="card-title">Easy access to everyone</h5>
            <p class="card-text">Everyone can reach our website and can make a website for themself</p>
            <button class="btn btn-secondary" ><a href="#">Go somewhere</a></button>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card" id="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>