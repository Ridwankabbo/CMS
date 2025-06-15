@extends('layouts.profile-options')

@section('user-options')

    <section class="col-10">

        <div class="bg-light rounded-4 py-5 px-4 row" style="margin-left: 5px">


            <div class="card col-5 m-3" style="width:25rem;">
                {{-- <img src="{{url('images/asset/portfolio_img.png')}}" class="card-img-top" alt="..."> --}}

                <div>
                    <div id="portfolio1" class="carousel slide">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{url('images/asset/portfolio_img.png')}}" class="card-img-top" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{url('images/asset/portfolio_img.png')}}" class="card-img-top" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#portfolio1" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#portfolio1" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
                <div class="card-body text-center">
                    <a href="/template-1" class="btn btn-dark text-white" style="padding: 12px; font-size: 1rem;">Select</a>
                </div>
            </div>

            <div class="card col-5 m-3" style="width:25rem;">
                <div>
                    <div id="portfolio2" class="carousel slide">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{url('images/asset/portfolio-2.png')}}" class="card-img-top" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{url('images/asset/portfolio-2-skills&education.png')}}" class="card-img-top" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#portfolio2" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#portfolio2" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
                <div class="card-body text-center">
                    <a href="/template-2" class="btn btn-dark text-white" style="padding: 12px; font-size: 1rem;">Select</a>
                </div>
            </div>

            <div class="card col-5 m-3" style="width:25rem;">
              <div>
                  <div id="portfolio3" class="carousel slide">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="{{url('images/asset/portfolio-3.1.png')}}" class="card-img-top" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="{{url('images/asset/portfolio-3.2.png')}}" class="card-img-top" alt="...">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#portfolio2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#portfolio3" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
              </div>
              <div class="card-body text-center">
                  <a href="/template-3" class="btn btn-dark text-white" style="padding: 12px; font-size: 1rem;">Select</a>
              </div>
          </div>


          <div class="card col-5 m-3" style="width:25rem;">
              <div>
                  <div id="portfolio3" class="carousel slide">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="{{url('images/asset/portfolio-4.png')}}" class="card-img-top" alt="...">
                        </div>
                        {{-- <div class="carousel-item">
                          <img src="{{url('images/asset/portfolio-4.2.png')}}" class="card-img-top" alt="...">
                        </div> --}}
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#portfolio2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#portfolio3" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
              </div>
              <div class="card-body text-center">
                  <a href="/template-4" class="btn btn-dark text-white" style="padding: 12px; font-size: 1rem;">Select</a>
              </div>
          </div>

        </div>

    </section>

@endsection