<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;
use Validator;

class BrandController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $brands = Brand::select();

        if ($request->has('name'))
            $brands->where('name', 'like', "%" . trim($request->get('name')) . "%");

        $brands = $brands->orderBy('id', 'desc')->paginate(15);

        return view('brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), Brand::$rules);


        if ($validation->fails())
            return Redirect::back()->withInput()->withErrors($validation);

        $brand = new Brand;
        $brand->company_id = Auth::user()->company_id;
        $brand->name = $request->get('name');
        $brand->save();

        Flash::success('Marca creada exitosamente');

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
    public function edit($brandID)
    {
        $brand = Brand::findOrFail($brandID);

        return view('brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $brandID)
    {
        $validation = Validator::make($request->all(), Brand::$updateRules);

        if ($validation->fails())
            return Redirect::back()->withInput()->withErrors($validation);

        $brand = Brand::where('company_id', Auth::user()->company_id)
            ->findOrFail($brandID);

        $brands = Brand::where('company_id', Auth::user()->company_id)->where('name', $request->get('name'))->where('id', '<>', $brand->id)->first();

        if ($brands) {
            Flash::error("Ya existe una marca no el mismo nombre: $brand->name");

            return Redirect::back();
        }


        $brand->name = $request->get('name');
        $brand->save();

        Flash::success('Marca editada exitosamente');

        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($brandID)
    {
        $brand = Brand::where('company_id', Auth::user()->company_id)
            ->findOrFail($brandID);

        $brand->delete();

        Flash::success('Marca eliminado exitosamente');

        return Redirect::route('brands.index');
    }
}
