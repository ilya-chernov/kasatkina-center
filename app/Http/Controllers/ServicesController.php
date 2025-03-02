<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategories;
use App\Models\Attachment;
use Illuminate\Http\Request;
use App\Orchid\Screens\Service\ServicesCategories;

use App\Models\Service;

class ServicesController extends Controller
{
    public function index() {
        $result = ServiceCategories::all();
        return view('services.index', ["result" => $result]);
    }

    public function showService ($slug) {
        $req = Service::where("slug", $slug)->first();
        return view('services.detailed', ['data' => $req]);
    }
}
