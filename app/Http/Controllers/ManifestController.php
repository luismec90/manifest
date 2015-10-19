<?php

namespace App\Http\Controllers;

use App\Manifest;
use App\Product;
use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
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
    public function index(Request $request)
    {
        $manifests = Manifest::select();

        if ($request->has('code'))
            $manifests->where('code', 'like', "%" . trim($request->get('code')) . "%");

        if ($request->has('supplier_id'))
            $manifests->where('supplier_id', 'like', "%" . trim($request->get('supplier_id')) . "%");

        if ($request->has('description'))
            $manifests->where('description', 'like', "%" . trim($request->get('description')) . "%");

        if ($request->has('reference'))
            $manifests->whereHas('products', function ($q) use ($request) {
                $q->where('products.reference', 'like', "%" . trim($request->get('reference')) . "%");
            });

        $suppliers = ['' => 'Provedor'] + Supplier::orderBy('name', 'ASC')
                ->lists('name', 'id')->all();

        $manifests = $manifests->orderBy('id', 'desc')->paginate(15);

        return view('manifests.index', compact('manifests', 'suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = ['' => ''] + Supplier::orderBy('name', 'ASC')
                ->lists('name', 'id')->all();

        return view('manifests.create', compact('suppliers'));
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
        $manifest->supplier_id = $request->get('supplier_id');
        $manifest->description = $request->get('description');
        $manifest->code = $request->get('code');
        $manifest->save();

        $products = explode(" ", $request->get('products'));

        foreach ($products as $row) {
            $product = new Product;
            $product->company_id = Auth::user()->company_id;
            $product->manifest_id = $manifest->id;
            $product->reference = $row;
            $product->save();
        }

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $photo = $request->file('photo');

            $path = "companies/" . Auth::user()->company_id;
            if (!File::exists($path)) {
                File::makeDirectory($path);
            }

            $filename = $manifest->id . "." . $photo->getClientOriginalExtension();
            Image::make($photo->getRealPath())
                ->save("$path/$filename");
            $manifest->photo = $filename;
            $manifest->save();
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($manifestID)
    {
        $suppliers = ['' => ''] + Supplier::orderBy('name', 'ASC')
                ->lists('name', 'id')->all();

        $manifest = Manifest::with('products')
            ->findOrFail($manifestID);


        return view('manifests.edit', compact('manifest', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $manifestID)
    {
        $validation = Validator::make($request->all(), Manifest::$rules);

        if ($validation->fails())
            return Redirect::back()->withInput()->withErrors($validation);

        $manifest = Manifest::with('products')
            ->where('company_id', Auth::user()->company_id)
            ->findOrFail($manifestID);

        $manifest->supplier_id = $request->get('supplier_id');
        $manifest->description = $request->get('description');
        $manifest->code = $request->get('code');
        $manifest->save();

        $manifest->products()->delete();

        $products = explode(" ", $request->get('products'));

        foreach ($products as $row) {
            $product = new Product;
            $product->company_id = Auth::user()->company_id;
            $product->manifest_id = $manifest->id;
            $product->reference = $row;
            $product->save();
        }

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $photo = $request->file('photo');

            $path = "companies/" . Auth::user()->company_id;

            if (!File::exists($path))
                File::makeDirectory($path);

            $filename = $manifest->id . "." . $photo->getClientOriginalExtension();

            if (File::isFile($path . "/" . $manifest->photo))
                File::delete($path . "/" . $manifest->photo);

            Image::make($photo->getRealPath())
                ->save("$path/$filename");
            $manifest->photo = $filename;
            $manifest->save();
        }

        Flash::success('Manifiesto editado exitosamente');

        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($manifestID)
    {
        $manifest = Manifest::where('company_id', Auth::user()->company_id)
            ->findOrFail($manifestID);

        $manifest->delete();

        Flash::success('Manifiesto eliminado exitosamente');

        return Redirect::route('manifests.index');
    }
}
