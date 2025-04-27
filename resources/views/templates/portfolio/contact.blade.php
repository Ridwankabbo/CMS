@extends('templates.portfolio.header-footer')

@section('portfolio-template-main-content')

    <div class="border bg-light p-5 mb-5 rounded">

        <form>
            <div class="mb-3">
                <input type="text" class="form-control p-3" id="exampleInputEmail1" name="user_name" placeholder="Name">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control p-3" id="exampleInputEmail1" name="user_email" placeholder="Email">
            </div>
            <div class=" mb-3">
                <textarea class="form-control" placeholder="Write message heare.." id="floatingTextarea2" style="height: 100px"></textarea>
            </div>
            
            <div class="text-center">
                <button type="submit" class="btn btn-primary ">Submit</button>
            </div>
          </form>
    </div>

@endsection
