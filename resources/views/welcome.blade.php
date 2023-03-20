@extends('layouts.layout')
@section('home', 'active')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">Shavkat Mirziyoyev:</h4>
                <h1 class="display-3 font-weight-bold text-white">"@lang('home.home_header_content')" </h1>
                <!-- <p class="text-white mb-4">Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed sit.
                                                    Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed ipsum at ipsum nonumy amet. Clita
                                                    lorem dolore sed stet et est justo dolore.</p> -->
                <!-- <a href="" class="btn btn-secondary mt-1 py-3 px-5">Ko'proq ma'lumot olish</a> -->
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="/assets/img/header.png" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
        <div class="container pb-3">
            @include('sections.service_different')

        </div>
    </div>
    <!-- Facilities Start -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="/assets/img/about-1.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5"><span class="pr-2">@lang('home.last_article')</span></p>
                    <h1 class="mb-4">@lang('home.the_best_school')</h1>
                    <p>@lang('home.con_tent')
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">@lang('home.our_classes')</span></p>
                <h1 class="mb-4">@lang('home.choose_class_for_your_children')</h1>
            </div>
            <div class="row">

                @include('sections.groups')

            </div>

        </div>
    </div>
    <!-- Class End -->


    <!-- Registration Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <p class="section-title pr-5"><span class="pr-2">@lang('home.order_seat')</span></p>
                    <h1 class="mb-4">@lang('home.order_place_for_your_child')</h1>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum
                        et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor
                    </p>
                    <ul class="list-inline m-0">
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Labore eos amet dolor amet diam</li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Etsea et sit dolor amet ipsum</li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Diam dolor diam elitripsum vero.
                        </li>
                    </ul>
                    <!-- <a href="" class="btn btn-primary mt-4 py-2 px-4">Book Now</a> -->
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-secondary text-center p-4">
                            <h1 class="text-white m-0">@lang('home.order_seat')</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="@lang('home.name')"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control border-0 p-4" placeholder="@lang('home.phone_number')"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>@lang('home.choose_class')</option>
                                        <option value="1">Group Bugirsoq</option>
                                        <option value="2">Group Alpomish</option>
                                        <option value="3">Group Profesor</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-secondary btn-block border-0 py-3"
                                        type="submit">@lang('home.send')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->


    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">@lang('home.our_teachers')</span></p>
                <h1 class="mb-4">@lang('home.meet_our_teachers')</h1>
            </div>
            <div class="row">

                @include('sections.teachers')

            </div>

        </div>
    </div>

    <!-- Team End -->



    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container p-0">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">@lang('home.gratitude')</span></p>
                <h1 class="mb-4">@lang('home.parents_idea')</h1>
            </div>
            <div class="row pb-3">

                @include('sections.parents_idea')
            </div>

        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">@lang('home.life_in_kindergarten')</span></p>
                <h1 class="mb-4">@lang('home.last_articles')</h1>
            </div>
            <div class="row pb-3">

                @include('sections.children')

            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
