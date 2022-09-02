<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
        crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd; ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">MonumentalBlogs</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" 
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  justify-content-center" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item ">
                            <a class="nav-link active text-center" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" href="{{route('register')}}">Registration</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                        </form>
                    </span>
                </div>
            </div>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-3">
                    <div class="card-header bg-primary">
                        <h4 class="text-center text-white fw-bold"> Login </h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="inputAddress" placeholder="Email">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="inputAddress2" placeholder="Password">
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>