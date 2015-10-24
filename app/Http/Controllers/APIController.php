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

    public function search($username, $password, $reference)
    {
        if (!Auth::attempt(['email' => $username, "password" => $password]))
            return "error";


        $manifests = Manifest::with('photos')
            ->where('manifests.company_id', Auth::user()->company_id)
            ->whereHas('products', function ($q) use ($reference) {
                $q->where('products.reference', 'like', "%" . trim($reference) . "%");
            })->join('suppliers', 'manifests.supplier_id', '=', 'suppliers.id')
            ->select("manifests.id", "manifests.code", "suppliers.name AS supplier", "manifests.description")
            ->get();


        /*  foreach ($manifests as $manifest) {

              $manifest->photo = "";

              if ($manifest->photos != []) {
                  foreach ($manifest->photos as $index => $photo) {
                      $manifest->photo = $photo->path();
                  }
              }
              unset($manifest->photos);
          } */

        return ['result' => $manifests];
    }


    function showManifest($username, $password, $manifestID){
        if (!Auth::attempt(['email' => $username, "password" => $password]))
            return "error";

        $manifest = Manifest::with('photos')
            ->where('manifests.company_id', Auth::user()->company_id)
            ->join('suppliers', 'manifests.supplier_id', '=', 'suppliers.id')
            ->select("manifests.id", "manifests.code", "suppliers.name AS supplier", "manifests.description")
            ->find($manifestID);

        return ['result' => $manifest];
    }

}
