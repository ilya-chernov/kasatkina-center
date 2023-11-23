<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function aboutPage() {
        return view('about');
    }

    public function servicesPage() {
        return view('services');
    }

    public function leaderPage() {
        return view('leader');
    }
}
