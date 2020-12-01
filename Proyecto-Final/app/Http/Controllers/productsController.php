<?php

namespace App\Http\Controllers;
use App\products;
use App\categories;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index', [
            'products' => products::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create',[
            'categories'=>categories::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $cover = $request->file('bookcover');
    $extension = $cover->getClientOriginalExtension();
    Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $products = new products();
        $products->bag_name = $request->get('bag_name');
        $products->bag_description = $request->get('bag_description');
        $products->bag_material = $request->get('bag_material');
        $products->mime = $cover->getClientMimeType();
        $products->original_filename = $cover->getClientOriginalName();
        $products->filename = $cover->getFilename().'.'.$extension;
        $products->id_category = $request->get('bag_id_category');
        $products->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = products::find($id);
        return view('/products.edit',[
            'products'=>$products,
            'categories'=>categories::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cover = $request->file('bookcover');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $products= products::find($id);
        $products->bag_name = $request->get('bag_name');
        $products->bag_description = $request->get('bag_description');
        $products->bag_material = $request->get('bag_material');
        $products->mime = $cover->getClientMimeType();
        $products->original_filename = $cover->getClientOriginalName();
        $products->filename = $cover->getFilename().'.'.$extension;
        $products->id_category = $request->get('bag_id_category');
        $products->save();
        // Redireccionar a la página que lista los objetivos
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = products::find($id);
        $products->delete();
        return redirect()->route('products.index');
    }
}
