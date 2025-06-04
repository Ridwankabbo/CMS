<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <title>Profile</title>
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

			<div class="row" style="justify-content: space-between">

				<div class="col-2 pt-3  bg-light rounded-4">

                    <div class="list-group">
                        <a href="profile" class="list-group-item list-group-item-action mb-2">Home page content</a>
                        {{-- <a href="resume" class="list-group-item list-group-item-action mb-2">About conctent</a>
                        <a href="contact" class="list-group-item list-group-item-action mb-2">Contact content</a> --}}
                        <a href="user-projects" class="list-group-item list-group-item-action mb-2">Projects</a>
                        <a href="web-templates" class="list-group-item list-group-item-action mb-2">Templates</a>
                        <a href="/section-selection" class="list-group-item list-group-item-action mb-2">select sections</a>
                    </div>
					
				</div>

				<div class="col-10 pt-3 bg-light rounded-4">
                   @yield('user-options')
                   
                </div>   
                   {{-- <form action="/save">
                        @yield('user-options')
                    </form> --}}
                
				
			</div>
			
		</div>

	</div>

    <script src="{{url('js/profileSelectionSection.js')}}"></script>



</body>
</html>