<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Logged in succesfully</title>
    <style>
        nav{
    background-color: #6885EF;
    color: #fff;
    
    
}
nav h2{
    padding: 5px;
    padding-left: 10px;
    color: white;
}
nav li{
    padding: 3px;
    color: white;
}
nav li a:hover{
    text-decoration: underline;
    transition-duration: 0.5ms;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html,body{
    height: 100dvh;
}

.loggedIn{
    padding-top: 2rem;
    text-align: center
}
.templates{
    background-color: #6885EF
}

.templates:hover{
    background-color: #476AEC
}
    </style>
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
          <a class="nav-link " href="templates">Templates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container loggedIn">
        <h1>You are logged in succesfully</h1><br>
        <a href="templates" class="btn templates">Go to my Templates</a>
    </div>

</body>
</html>