<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Models\product\GameDevice;
use Illuminate\Http\Request;


class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game_devices = GameDevice::all();
        return view('myhome.products.gameDevices', compact('game_devices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('myhome.products.createProductForm.createGameDevice');
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
        $destinationPath = 'assets/products/images/game';
        $extension = $image->getClientOriginalExtension();
        $imageName = date("YmdHis") . '.' . $extension;
        $image->move($destinationPath, $imageName);

        $validProduct['image'] = $imageName;

        $product = GameDevice::create($validProduct);
        $product->save();
        return redirect('/admin/game-devices')->with('status', 'Game device successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game_device = GameDevice::find($id);
        return view('myhome.products.showProducts.showGameDevice', compact('game_device'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game_device = GameDevice::find($id);
        return view('myhome.products.editProductForm.editGameDevice', compact('game_device'));
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
        $game_device = GameDevice::find($id);
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
            $destinationPath = 'assets/products/images/game';
            $extension = $image->getClientOriginalExtension();
            $imageName = date("YmdHis") . '.' . $extension;
            $validProduct['image'] = $imageName;
            $game_device->image = $image;

            if ($game_device->image) {
                $oldImagePath = $destinationPath . '/' . $game_device->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $image->move($destinationPath, $imageName);
        }

        $game_device->update($validProduct);

        return redirect('admin/game-devices')->with('status', 'Modification réussie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game_device = GameDevice::find($id);
        if ($game_device->image) {
            $oldImagePath = 'assets/products/images/game' . '/' . $game_device->image;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $game_device->delete();
        return redirect('/admin/game-devices')->with('status', 'Game device successfully deleted');
    }
}
