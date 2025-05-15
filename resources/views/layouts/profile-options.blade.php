<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    


    <div class="container-fluid">
        <div>
            <nav class="navbar navbar-expand-sm navbar-dark p-2"  style="border:2px; border-radius: 10px;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img src="{{url('images/asset/logo.jpg')}}" alt="Avatar Logo" style="height:110px; width:110px;" class="rounded-pill">
                    </a>
                </div>
            </nav>
        </div>
		<div>

			<div class="row">

				<div class="col-2 pt-3  bg-light rounded-4">

                    <div class="list-group">
                        <a href="profile" class="list-group-item list-group-item-action mb-2">Home page content</a>
                        {{-- <a href="resume" class="list-group-item list-group-item-action mb-2">About conctent</a>
                        <a href="contact" class="list-group-item list-group-item-action mb-2">Contact content</a> --}}
                        <a href="web-templates" class="list-group-item list-group-item-action mb-2">Templates</a>
                    </div>
					
				</div>

				
                   @yield('user-options')
                   
                    {{-- <form action="/save">
                        @yield('user-options')
                    </form> --}}
                
				
			</div>
			
		</div>

	</div>



</body>
</html>