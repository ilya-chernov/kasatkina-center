<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class ServicesController extends Controller
{
    public function index() {
        $result = Service::all();
        return view('services.index');
    }

    public function showService ($id) {
        return view('services.detailed');
    }
}
