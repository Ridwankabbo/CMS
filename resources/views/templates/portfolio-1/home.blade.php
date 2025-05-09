@extends('templates.portfolio-1.header-footer')

@section('page-title')
        {{$portfolio->title}}
@endsection

@section('user-title')
     {{$portfolio->title}}
@endsection


@section('portfolio-template-main-content')

            <div class="mt-5 mb-5 p-5 bg-light rounded">
                <div class="text-center">
                    <h2>{{$portfolio->title}}</h2>
                <h4>A {{$portfolio->intro_text}}</h4>
                </div>
                <div class="text-center mt-5 mb-5 ">
                    <img class="rounded-3" src="{{ url("images/users/$portfolio->image")}}" height="220px"  width="250px" alt="images/{{$portfolio->image}}">
                </div>
            </div>

@endsection