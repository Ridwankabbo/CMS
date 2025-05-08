<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('templates-css/portfolio-2.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    
</head>

<body>

    <section>

        <section class="content">

            <section class="nav-bar">
                <div id="logo"><a href="">Logo</a></div>
                <div>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Skills</a></li>
                        <li><a href="">Educations</a></li>
                    </ul>
                </div>
            </section>
            
    
            <section class="">
                @yield('main-body')
            </section>

        </section>

        <section id="footer">
            <div class="logo">
                <a href="">Logo</a>
            </div>

            <div class="copyright">
                &copy;copyright
            </div>
        </section>

        

    </section>

</body>

</html>