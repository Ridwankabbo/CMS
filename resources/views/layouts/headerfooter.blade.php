<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm " style=" border: 2px; border-radius:10px;">
        
            <div class="  container-fluid ">
                <a class="navbar-brand" href="/">
                <img src="{{url('images/asset/logo.jpg')}}" alt="Avatar Logo" style="height:110px; width:110px;" class="rounded-pill"> 
                </a>
                <h1 class=" text-primary m-4 text-dark">Site Builder</h1>
            </div>
                
            <div class=" collapse navbar-collapse" id="collapsibleNavbar">
                 <ul class="navbar-nav m-3" >
                    <li class="nav-item" >
                        <a class="nav-link text-dark " href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark "  href="about">About</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link "  style="background: linear-gradient(to bottom right,rgb(27, 12, 236),rgba(235, 7, 243, 0.94)); 
                                                -webkit-background-clip: text; 
                                                -webkit-text-fill-color: transparent;" href="contact">Contact</a>
                    </li> --}}
                    
                    <li class="nav-item">
                        <a href="singin" class="btn text-white bg-dark" >Login</a>
                    </li>
                </ul>
            </div>
        
        </nav>
    </div>

    <main>
        @yield("main_content")
    </main>

    <div class="container">
        <footer>
            <div class="row">
               <div class="col-4 m-3">
                    <h2>Site Builder</h2>
                    <p>mobile : 0177427434129 <br> Address:Matuail, Dhaka </p>
               </div>
               <div class="col-4 m-3">
                    <h5>&COPY;copy</h5>
               </div>

               <div class="col-4"></div>

            </div>
        </footer>
    </div>
</body>
</html>