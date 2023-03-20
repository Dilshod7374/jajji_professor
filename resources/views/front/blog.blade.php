@extends('layouts.layout')
@section('posts', 'active')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">@lang('words.our_articles')</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="index.html">@lang('navbar.home')</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">@lang('navbar.posts')</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">@lang('home.life_in_kindergarten')</span></p>
                <h1 class="mb-4">@lang('words.last_articles')</h1>
            </div>
            <div class="row pb-3">
                @include('sections.children')
            </div>
        </div>
    </div>
    <!-- Blog End -->


@endsection