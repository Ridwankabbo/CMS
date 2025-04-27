<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Sing Up</title>
</head>
<body>
    


    <div class="container mt-5">

        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                            <div class="text-center mb-5">
                                <!-- <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div> 
                                <h1 class="fw-bolder">Get in touch</h1>
                                <p class="lead fw-normal text-muted mb-0">Let's work together!</p>-->
    
                                <p class="h2"><strong>Site Builder </strong>
                                </p>
    
                            </div>
                            <div class="row gx-5 justify-content-center">
                                <div class="col-lg-8 col-xl-6">
                                    <!-- * * * * * * * * * * * * * * *-->
                                    <!-- * * SB Forms Contact Form * *-->
                                    <!-- * * * * * * * * * * * * * * *-->
                                    <!-- This form is pre-integrated with SB Forms.-->
                                    <!-- To make this form functional, sign up at-->
                                    <!-- https://startbootstrap.com/solution/contact-forms-->
                                    <!-- to get an API token!-->
                                    <form action="register" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                        @csrf
                                        <!-- Name input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." />
                                            <label for="name">Full name</label>
                                           
                                        </div>
                                        <!-- Email address input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com"  />
                                            <label for="email">Email address</label>
                                        </div>
                                        <!-- Password Input -->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="password" id="password" type="password" placeholder="(123) 456-7890"  />
                                            <label>Password</label>
                                            
                                        </div>
    
                                        <!-- Phone number input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="phone" id="phone" type="tel" placeholder="(123) 456-7890"  />
                                            <label for="phone">Phone number</label>
                                            
                                        </div>
    
                                        
                                        <!-- Submit success message-->
                                        <!---->
                                        <!-- This is what your users will see when the form-->
                                        <!-- has successfully submitted-->
                                    
                                        <!-- Submit Button-->
                                        <div class="text-center"><button class="btn text-white bg-dark" type="submit">Sing up</button></div>
                                        <div class="text-center">
                                                <p>Already have an account? <a href="singin" class="btn border border-1 p-1" >Sing in<a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
    
        </div>



</body>
</html>

