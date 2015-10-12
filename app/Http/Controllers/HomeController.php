<?php

namespace App\Http\Controllers;

use App\Manifest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            return Redirect::to('/manifests');
        }

        return Redirect::to('/entrar');
    }

}
