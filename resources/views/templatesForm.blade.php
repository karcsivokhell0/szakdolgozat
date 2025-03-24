<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>WebMaker |TemplateForm</title>
    
    @vite(['resources/css/register.css', 'resources/js/app.js'])
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


<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Generate Your website</div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                                @if(session('download_link'))
                                    <br>
                                    <a href="{{ session('download_link') }}" class="btn btn-primary mt-2" download>
                                        Download your website
                                    </a>
                                @endif
                            </div>
                        @endif

                        <form method="POST" action="generate">
                            @csrf()

                            <div class="mb-3">
                                <label for="title" class="form-label">HeaderTitle</label>
                                <input type="text" class="form-control" id="HeaderTitle" name="HeaderTitle" required>
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">BodyTitle</label>
                                <input type="text" class="form-control" id="BodyTitle" name="BodyTitle" required>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="author" class="form-label">Background Color</label>
                                <input type="text" class="form-control" id="bgColor" name="bgColor">
                            </div>

                            <button type="submit" class="btn btn-primary">Generate Website</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<br><br><br><br>

<footer class="py-3">
  <ul class="nav justify-content-center">
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
  </ul>
  <p class="text-center text-body-secondary">© 2024 Company, Inc</p>
</footer>
</body>
</html>