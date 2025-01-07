<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
    
    <style>
      body{
    background-color:#A9A9A9;
  }
  
  #navbar{
    background-color: #dddddd;
  }
  
        #btn{
      padding: 1rem 2rem;
      font-size: 1rem;
      color: #fff;
      background-color: #1d4ed8;
      border-radius: 5px;
      cursor: pointer;
      transition: all 0.3s ease;
  }
  
  #btn:hover{
      background-color: #1e40af;
  }
  
  #container{
      max-width: 1200px;
      margin: auto;
      padding: 5rem 2rem;
  }
  
  
  
  header{
      position: relative;
      padding-top: 2rem;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      align-items: center;
      gap: 2rem;
  }
  
  header #content h4{
      margin-bottom: 1rem;
      color: #ccc;
      font-size: 1rem;
      font-weight: 600;
  }
  
  header #content h1{
      color: black;
      margin-bottom: 1rem;
      font-size: 3rem;
      font-weight: 700;
      line-height: 4rem;
  }
  
  header #content h1 span{
      -webkit-text-fill-color: transparent;
      -webkit-text-stroke: 1px black;
  }
  
  header #content p{
      margin-bottom: 2rem;
      color: #454545;
      font-size:20px;
  }
  
  header #image{
      position: relative;
  }
  
  header #image::before{
      position: absolute;
      top: 0;
      left: 50%;
      transform: translateX(-50%);
      font-size: 38rem;
      font-weight: 400;
      line-height: 20rem;
      color: #1d4ed8;
      opacity: 0.2;
      z-index: -100;
  }
  
  header #image img{
      max-width: 500px;
      height: auto;
      border-radius: 10%;
      padding-left: 10px;
  }
  
  section #header{
      margin-bottom: 1rem;
      color: #fff;
      text-align: center;
      font-size: 2.25rem;
      font-weight: 600;
  }
    </style>
    
</head>
<body>


<nav style="background-color: #dddddd;" class="navbar navbar-expand-lg bg-body-tertiary">
  <div id="navbar" class="container-fluid">
    <h2><a class="navbar-brand fs-4" href="#">WebMaker</a></h2>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
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
  <div id="content">
    <span id="blur"></span>
    <span id="blur"></span>
            
    <H1>Create <span>YOUR</span> site like a pro</H1>
    <p>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus rem eos aliquid quo rerum
    temporibus ipsum distinctio numquam ut omnis placeat, nam sint atque quos dolorem laborum? Rerum, esse
    dolorem.
    </p>
    <button id="btn">Get Started</button>
  </div>
  <div id="image">
    <img src="https://mytechdecisions.com/wp-content/uploads/2019/10/AdobeStock_256229414.jpg">
  </div>
</header>
</body>
</html>