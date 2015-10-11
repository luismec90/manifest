<?php

namespace App\Http\Controllers;

use App\Manifest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            $manifests = Manifest::all();
            return view('manifests.index', compact('manifests'));
        }

        return view('pages.home');
    }
}
