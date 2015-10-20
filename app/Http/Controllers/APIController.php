<?php

namespace App\Http\Controllers;

use App\Manifest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class APIController extends Controller
{

    public function login(Request $request)
    {

        $email = $request->get('username');
        $password = $request->get('password');
        if (Auth::attempt(['email' => $email, $password])) {
            return ['status' => 'succes',
                'user' => Auth::user()];
        }
        return ['status' => 'error'];

    }


}
