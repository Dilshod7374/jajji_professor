@extends('layouts.layout')
@section('teachers', 'active')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">@lang('home.our_teachers')</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="index.html">@lang('navbar.home')</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">@lang('navbar.teachers')</p>
            </div>
        </div>
    </div>
    <!-- Header End -->
     <!-- Team Start -->
     <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">@lang('words.management')</span></p>
            </div>
            <div class="row">
                @include('sections.teachers')
            </div>
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">@lang('home.our_teachers')</span></p>
                <h1 class="mb-4">@lang('home.meet_our_teachers')</h1>
            </div>
            <div class="row">
                @include('sections.teachers')
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
            @include('sections.parents_idea')
        </div>
    </div>
    <!-- Testimonial End -->
@endsection