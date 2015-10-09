<?php

namespace App\Http\Controllers;

use App\Manifest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $manifests = Manifest::all();
        return view('manifests.index', compact('manifests'));
    }
}
