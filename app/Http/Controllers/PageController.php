<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $parents = \App\Models\Parents::limit(3)->latest()->get();
        $services = \App\Models\Service::limit(3)->latest()->get();
        $teachers = \App\Models\Teacher::limit(4)->latest()->get();
        $groups = \App\Models\Group::limit(3)->latest()->get();
        $achievements = \App\Models\Achievement::limit(3)->latest()->get();

        return view('welcome', compact('teachers', 'groups', 'achievements', 'parents', 'services'));
    }

    public function groups(){
        $groups = \App\Models\Group::limit(3)->latest()->get();
        return view('front.groups', compact('groups'));
    }

    public function teachers(){
        $parents = \App\Models\Parents::limit(3)->latest()->get();
        $teachers = \App\Models\Teacher::limit(3)->orderBy('id', 'DESC')->paginate(3);
        // dd($teachers);
        return view('front.teachers', compact('teachers', 'parents'));
    }

    public function achievements(){
        $achievements = \App\Models\Achievement::limit(3)->orderBy('id', 'DESC')->paginate(3);

        return view('front.achievements', compact('achievements'));
    }

    public function gallery(){
        $groups = \App\Models\Group::limit(3)->latest()->get();
        $teachers = \App\Models\Teacher::limit(3)->orderBy('id', 'DESC')->paginate(3);

        return view('front.gallery', compact('teachers', 'groups'));
    }

    public function blog(){
        $achievements = \App\Models\Achievement::limit(3)->latest()->get();
        return view('front.blog', compact('achievements'));
    }
}



