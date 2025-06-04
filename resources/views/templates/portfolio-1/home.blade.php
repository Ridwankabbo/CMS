@extends('templates.portfolio-1.header-footer')

@section('page-title')
        {{$userPortfolio->title}}
@endsection

@section('user-title')
     {{$userPortfolio->title}}
@endsection


@section('portfolio-template-main-content')

            @if ($selectedSection->intorduction_section == 1)
            <div class="mt-5 mb-5 p-5 bg-light rounded">
                <div class="text-center">
                    <h2>{{$userPortfolio->title}}</h2>
                <h4>A {{$userPortfolio->intro_text}}</h4>
                </div>
                <div class="text-center mt-5 mb-5 ">
                    <img class="rounded-3" src="{{ url("images/users/$userPortfolio->image")}}" height="220px"  width="250px" alt="profile image">
                </div>
            </div>
            @endif

@endsection