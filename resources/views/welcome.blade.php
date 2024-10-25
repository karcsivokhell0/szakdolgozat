<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fő oldal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        #myNavbar a{
            font-size: 20px;
            padding: 20px;
            margin: 10px;
            
        }

        #ribanc{
            padding: 10px;
            margin: 10px;
        }

        #ribanc2{
            padding: 10px;
            margin: 10px;
        }

        #dropdown a:hover{
            transition-duration:0.5ms;
            text-decoration:underline;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-3">
                        <h1 id="ribanc">Webmaker</h1>
                    </div>
                    <div class="col-7"></div>
                    <div class="col-2">
                        <button class="navbar-toggler" type="button" id="ribanc2" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">Főoldal</a>
                            </li>
                            <li class="nav-item "></li>
                                <a href="#" class="nav-link">Rólunk</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Oldalak</a>
                                <ul class="dropdown-menu" id="dropdown">
                                    <li>
                                        <a href="#4" class="dropdown-item"> Első oldal</a>
                                    </li>
                                    <li>
                                        <a href="#4" class="dropdown-item"> Második oldal</a>
                                    </li>
                                    <li>
                                        <a href="#4" class="dropdown-item"> Harmadik oldal</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
    </nav>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Left</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="//codeply.com">Codeply</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
    </div>
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="#">Navbar 2</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Right</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
    </div>
</nav>

    

   
</body>
</html>