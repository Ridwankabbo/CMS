@extends('templates.portfolio-1.header-footer')

@section('title')
    @foreach($portfolio as $item)
        {{$item->title}}
    @endforeach
@endsection

@section('user-title')
    @foreach($portfolio as $item)
        {{$item->title}}
    @endforeach
@endsection



@section('portfolio-template-main-content')

    @if(count($portfolio) > 0)
        @foreach($portfolio as $item)
            <div class="mt-5 mb-5 p-5 bg-light rounded">
                <div class="text-center">
                    <h2>{{$item->title}}</h2>
                <h4>A {{$item->intro_text}}</h4>
                </div>
                <div class="text-center mt-5 mb-5 ">
                    <img class="rounded-3" src="{{ url("images/users/$item->image")}}" height="220px"  width="250px" alt="images/{{$item->image}}">
                </div>
            </div>
        @endforeach
    @endif

@endsection