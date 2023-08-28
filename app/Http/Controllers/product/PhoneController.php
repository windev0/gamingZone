<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Models\product\Phone;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Http\Testing\File as TestingFile;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::all();
        return view('myhome.products.phones', compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
            'date' => 'required ',
            'popular' => 'required'
        ]);
        $image = $request->file('image');
        $destinationPath = 'assets/products/images/phone';
        $extension = $image->getClientOriginalExtension();
        $imageName = date("YmdHis") . '.' . $extension;
        $image->move($destinationPath, $imageName);

        $validProduct['image'] = $imageName;

        $product = Phone::create($validProduct);
        $product->save();
        return redirect('/admin/phones')->with('status', 'Phone successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phone = Phone::find($id);
        return view('myhome.products.showProducts.showPhone', compact('phone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phone = Phone::find($id);
        return view('myhome.products.editProductForm.editPhone', compact('phone'));
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
        $phone = Phone::find($id);
        $validProduct = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png,gif,svg',
            'quantity' => 'required',
            'date' => 'required ',
            'popular' => 'required'
        ]);

        if ($request->image) {
            $image = $request->file('image');
            $destinationPath = 'assets/products/images/phone';
            $extension = $image->getClientOriginalExtension();
            $imageName = date("YmdHis") . '.' . $extension;
            $validProduct['image'] = $imageName;
            $phone->image = $image;

            if ($phone->image) {
                $oldImagePath = $destinationPath . '/' . $phone->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $image->move($destinationPath, $imageName);
        }

        $phone->update($validProduct);

        return redirect('admin/phones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phone = Phone::find($id);
        if ($phone->image) {
            $oldImagePath = 'assets/products/images/phone' . '/' . $phone->image;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $phone->delete();
        return redirect('/admin/phones')->with('status', 'Phone successfully deleted');
    }
}
