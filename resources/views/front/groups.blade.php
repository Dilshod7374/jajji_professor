@extends('layouts.layout')
@section('classes', 'active')
@section('content')



    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">@lang('home.our_classes')</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="index.html">@lang('navbar.home')</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">@lang('navbar.classes')</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">@lang('words.lessons')</span></p>
                <h1 class="mb-4">@lang('words.lessons_for_your_children')</h1>
            </div>
            <div class="row">

                @include('sections.groups')

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
                <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                    ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                    dolor</p>
                <ul class="list-inline m-0">
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Labore eos amet dolor amet diam</li>
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Etsea et sit dolor amet ipsum</li>
                    <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Diam dolor diam elitripsum vero.</li>
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
                                <input type="text" class="form-control border-0 p-4" placeholder="@lang('home.name')" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control border-0 p-4" placeholder="@lang('home.phone_number')" required="required" />
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
                                <button class="btn btn-secondary btn-block border-0 py-3" type="submit">@lang('home.send')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Registration End -->


@endsection