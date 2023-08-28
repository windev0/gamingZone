<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Models\product\PcDevice;
use Illuminate\Http\Request;
use Illuminate\Http\Testing\File;

class PcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pcDevices = PcDevice::all();
        return view('myhome.products.pcDevices', compact('pcDevices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pcDevices = PcDevice::all();
        return view('myhome.products.createProductForm.createPCDevice', compact('pcDevices'));
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
        $destinationPath = 'assets/products/images/pc';
        $extension = $image->getClientOriginalExtension();
        $imageName = date("YmdHis") . '.' . $extension;
        $image->move($destinationPath, $imageName);

        $validProduct['image'] = $imageName;

        $product = PcDevice::create($validProduct);
        $product->save();
        return redirect('/admin/pc-devices')->with('status', 'PC device successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pc_device = PcDevice::find($id);
        return view('myhome.products.showProducts.showPcDevice',  compact('pc_device'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pc_device = PcDevice::find($id);
        return view('myhome.products.editProductForm.editPcDevice', compact('pc_device'));
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
        $pc_device = PcDevice::find($id);
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
            $destinationPath = 'assets/products/images/pc';
            $extension = $image->getClientOriginalExtension();
            $imageName = date("YmdHis") . '.' . $extension;
            $validProduct['image'] = $imageName;
            $pc_device->image = $image;

            if ($pc_device->image) {
                $oldImagePath = $destinationPath . '/' . $pc_device->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $image->move($destinationPath, $imageName);
        }

        $pc_device->update($validProduct);

        return redirect('admin/pc-devices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pc_device = PcDevice::find($id);
        
        if ($pc_device->image) {
            $oldImagePath = 'assets/products/images/pc' . '/' . $pc_device->image;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $pc_device->delete();
        return redirect('/admin/pc-devices')->with('status', 'PC device successfully deleted');
    }
}
