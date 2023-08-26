<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Models\product\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class  ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getProduct()
    {
        $products = Product::all();
        return $products;
    }

    public function indexGameDevices()
    {
        $gameDevices = $this->getProduct();
        // dd($gameDevices);

        return view('myhome.products.gameDevices', compact('gameDevices'));
    }

    public function indexPCDevices()
    {
        return view('myhome.products.pcDevices');
    }
    public function indexPhones()
    {
        return view('myhome.products.phones');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createGameDevice()
    {
        return view('myhome.products.createProductForm.createGameDevice');
    }
    public function createPCDevice()
    {
        return view('myhome.products.createProductForm.createPCDevice');
    }
    public function createPhone()
    {
        return view('myhome.products.createProductForm.createPhone');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validProduct = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg',
            'quantity' => 'required',
            'type' => 'required',
            'date' => 'required ',
            'popular' => 'required'
        ]);
        $image = $request->file('image');
        $destinationPath = 'assets/products/uploads/images';
        $extension = $image->getClientOriginalExtension();
        $imageName = date("YmdHis") . '.' . $extension;
        $image->move($destinationPath, $imageName);

        $validProduct['image'] = $imageName;

        $product = Product::create($validProduct);
        $product->save();
        return redirect('/admin/game-devices')->with('status', 'Product successfully added');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
