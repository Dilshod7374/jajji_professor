@extends('layouts.layout')
@section('gallery', 'active')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">@lang('navbar.gallery')</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="index.html">@lang('navbar.home')</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">@lang('navbar.gallery')</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Gallery Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">@lang('words.our_gallery')</span></p>
                <h1 class="mb-4">@lang('words.our_children')</h1>
            </div>
            <!-- <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary m-1 active"  data-filter="*">Hammasi</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".first">O'yingohda</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".second">Chizish</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".third">O'qish</li>
                    </ul>
                </div>
            </div> -->
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/img/portfolio-1.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/img/portfolio-2.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/img/portfolio-3.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/img/portfolio-4.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/img/portfolio-5.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-5.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="assets/img/portfolio-6.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-6.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <iframe  width="350" height="250"
                    src="https://www.youtube.com/embed/Lm6GCkTl2V0">
                    </iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <iframe  width="350" height="250"
                    src="https://www.youtube.com/embed/Lm6GCkTl2V0">
                    </iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <iframe  width="350" height="250"
                    src="https://www.youtube.com/embed/Lm6GCkTl2V0">
                    </iframe>
                    </div>
                </div>
                 </div>
            </div>
    </div>
    <!-- Gallery End -->

@endsection