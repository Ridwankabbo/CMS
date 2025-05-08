<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>

    <div class="container">
        <div class=" mt-3 mb-5">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand text-dark">@yield('user-title')</a>
                  <div>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                          <a class="nav-link text-dark active" aria-current="page" href="home">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark"  href="about">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark" href="contact">Contatc</a>
                        </li>
                        
                      </ul>
                  </div>
                </div>
              </nav>
        </div>

        <div>
            @yield('portfolio-template-main-content')
        </div>

        <div>
            <footer class="row bg-dark text-white">
                <div class="col-6">
                    <h2>Name</h2>
                    <p>Address:Bangladesh <br>Contatc:0123456789</p>
                </div>
                <div class="col-6 mt-2">
                    &copy;copy
                </div>
            </footer>
        </div>

    </div>
    
</body>
</html>
