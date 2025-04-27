@extends('layouts.profile-options')

@section('user-options')
<div class="col-10 text-center">
    <div class="bg-light rounded-4 py-5 px-4 ">
    <div class="row  ">
            <div class="col-lg-10 col-xl-6">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    
                    <!-- <div class="pt-5 pb-5">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Introduction text</label>
                            <input type="email" class="form-control form-control-lg" id="email" placeholder="Enter email" name="email">

                            <textarea class="form-control form-control-lg"  name="Introduction_text" placeholder="Enter some introduction text"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Choose your image:</label>
                            <input class="form-control form-control-lg" type="file"  width="48" height="48">
                        </div>
                    </div>

                    <div class="mb-3 mt-3">
                            <label for="email" class="form-label">About Yourself:</label>
                            <input type="email" class="form-control form-control-lg" id="email" placeholder="Enter email" name="email"> 

                            <textarea class="form-control form-control-lg"  name="Write somethis about yourself" ></textarea>
                    </div>

                    <div>
                        <input type="submit" name="Save" class="btn text-white" style="background: linear-gradient(to bottom right,rgb(27, 12, 236),rgba(235, 7, 243, 0.94));">
                    </div>-->
                   
                </form> 
            </div>
        </div>
</div>
</div>
@endsection