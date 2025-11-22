<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('public.about');
    }

    public function courses()
    {
        return view('public.courses');
    }

    public function trainers()
    {
        return view('public.trainers');
    }

    public function events()
    {
        return view('public.events');
    }

    public function pricing()
    {
        return view('public.pricing');
    }

    public function contact()
    {
        return view('public.contact');
    }
}