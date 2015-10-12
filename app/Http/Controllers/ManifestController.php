<?php

namespace App\Http\Controllers;

use App\Manifest;
use App\Product;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Laracasts\Flash\Flash;
use Redirect;
use Session;
use Auth;


class ManifestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Request::get('s') !== '') {
            $s = Request::get('s');
            $manifests = Manifest::whereHas('products', function ($q) use ($s) {
                $q->where('products.reference', 'like', "%$s%");
            })->paginate(15);
        } else
            $manifests = Manifest::paginate(15);

        return view('manifests.index', compact('manifests'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('manifests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), Manifest::$rules);

        if ($validation->fails())
            return Redirect::back()->withInput()->withErrors($validation);

        $manifest = new Manifest;
        $manifest->company_id = Auth::user()->company_id;
        $manifest->code = $request->get('code');
        $manifest->supplier = $request->get('supplier');
        $manifest->save();

        $products = explode(" ", $request->get('products'));

        foreach ($products as $row) {
            $product = new Product;
            $product->company_id = Auth::user()->company_id;
            $product->manifest_id = $manifest->id;
            $product->reference = $row;
            $product->save();
        }

        Flash::success('Manifiesto creado exitosamente');

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
