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
        if (Auth::attempt(['email' => $email, "password" => $password])) {
            echo "success";
        } else
            echo "error";

    }

    public function search($reference)
    {
        $manifests = Manifest::whereHas('products', function ($q) use ($reference) {
            $q->where('products.reference', 'like', "%" . trim($reference) . "%");
        })->join('suppliers', 'manifests.supplier_id', '=', 'suppliers.id')
            ->select("manifests.id", "manifests.code", "suppliers.name AS supplier", "manifests.description")
            ->get();

        foreach ($manifests as $manifest) {

            $manifest->photo="";

            if ($manifest->photos != []) {
                foreach ($manifest->photos as $index => $photo) {
                    $manifest->photo = $photo->path();
                }
            }
            unset($manifest->photos);
        }

        return ['result' => $manifests];
    }


}
