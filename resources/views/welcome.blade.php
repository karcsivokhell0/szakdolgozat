<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fő oldal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-2">
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
                                <ul class="dropdown-menu">
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
        </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>