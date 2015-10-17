<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;
use Validator;

class SupplierController extends Controller
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
        $suppliers = Supplier::select();

        if ($request->has('name'))
            $suppliers->where('name', 'like', "%" . trim($request->get('name')) . "%");

        if ($request->has('nit'))
            $suppliers->where('nit', 'like', "%" . trim($request->get('nit')) . "%");

        if ($request->has('contact_name'))
            $suppliers->where('contact_name', 'like', "%" . trim($request->get('contact_name')) . "%");

        if ($request->has('contact_phone'))
            $suppliers->where('contact_phone', 'like', "%" . trim($request->get('contact_phone')) . "%");

        $suppliers = $suppliers->orderBy('id', 'desc')->paginate(15);

        return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), Supplier::$rules);


        if ($validation->fails())
            return Redirect::back()->withInput()->withErrors($validation);

        $supplier = new Supplier;
        $supplier->company_id = Auth::user()->company_id;
        $supplier->name = $request->get('name');
        $supplier->nit = $request->get('nit');
        $supplier->contact_name = $request->get('contact_name');
        $supplier->contact_phone = $request->get('contact_phone');
        $supplier->save();

        Flash::success('Provedor creado exitosamente');

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
    public function edit($supplierID)
    {
        $supplier = Supplier::findOrFail($supplierID);


        return view('suppliers.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $supplierID)
    {
        $validation = Validator::make($request->all(), Supplier::$updateRules);

        if ($validation->fails())
            return Redirect::back()->withInput()->withErrors($validation);

        $supplier = Supplier::where('company_id', Auth::user()->company_id)
            ->findOrFail($supplierID);

        if ($request->has('nit')) {
            $suppliers = Supplier::where('company_id', Auth::user()->company_id)->where('nit', $request->get('nit'))->where('id', '<>', $supplier->id)->first();

            if ($suppliers) {
                Flash::error("Ya existe un provedor con NIT: $suppliers->nit");

                return Redirect::back();
            }
        }

        $supplier->name = $request->get('name');
        $supplier->nit = $request->get('nit');
        $supplier->contact_name = $request->get('contact_name');
        $supplier->contact_phone = $request->get('contact_phone');
        $supplier->save();

        Flash::success('Provedor editado exitosamente');

        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($supplierID)
    {
        $supplier = Supplier::where('company_id', Auth::user()->company_id)
            ->findOrFail($supplierID);

        $supplier->delete();

        Flash::success('Provedor eliminado exitosamente');

        return Redirect::route('suppliers.index');
    }
}
