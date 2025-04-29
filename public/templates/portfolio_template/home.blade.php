@extends('templates.portfolio.header-footer')

@section('portfolio-template-main-content')

    
       
            <div class="mt-5 mb-5 p-5 bg-light rounded">
                <div class="text-center">
                    <h2>Hi, I' Title</h2>
                    <h4>A Software Developer</h4>
                </div>
                <div class="text-center mt-5 mb-5 ">
                    <img class="rounded-3" src="'images/'.'{{$item->image}}'" height="220px"  width="250px" alt="">
                </div>
            </div>

@endsection