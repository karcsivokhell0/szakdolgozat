<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>WebMaker | Contact us</title>
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
                <a class="nav-link" href="login">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contactUs">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    
    <div class="container justify-content-center errors">
      <div class="card mb-5 ">
        <div class="card-header">What is the problem that you encoutered?</div>
        <div class="card-body">
          @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif
          <form  method="POST" action="{{ route('errors') }}">
            @csrf()
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="errors">Select The error</label>
                <select class="form-control" id="errors" name="type">
                  <option>Can't reach something in our website</option>
                  <option>Can't create your website</option>
                  <option>Can't register/login</option>
                  <option>Can't download your template</option>
                  <option>A different kind of a problem</option>
                </select>
              </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1">Explain your problem here</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="error" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>

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