@extends('myhome.admin.admin')
@section('product-actions')
    <style>
        .form-line {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .form-line input {
            margin-left: 10px;
        }

        .text-area {
            margin-left: 8px;
        }

        .type {
            display: flex;
            justify-content: space-between;
        }

        .img{
            text-align: center;
        }
    </style>

    <div class="card " style="margin-top: 13%; margin-left:15%;">
        <div class="card-header ">
            <h5>Modification en cours...</h5>
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/update-game-device/' . $game_device->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <div class="form-group form-line">
                        <input type="text" name="name" placeholder="Nom du produit" id="" class="form-control"
                            value="{{ $game_device->name }}" required>
                        <input type="number" name="price" placeholder="Prix du produit" id=""
                            class="form-control" value="{{ $game_device->price }}" @required(true)>
                        <input type="number" name="quantity" placeholder="Quantité" id="" class="form-control"
                            value="{{  $game_device->quantity }}" required>
                    </div>
                    <br>
                    <div class="text-area">
                        <textarea name="description" id="" cols="95" rows="3" class="form-control"
                            placeholder="Description du produit" required>{{ $game_device->description }}</textarea>
                    </div>
                    <br>
                    <div class="type ">
                        <span><b>Popularité</b></span>
                        <span><b>Date d'ajout</b></span>
                    </div>
                    <div class="type">
                        <select name="popular" id="" class="form-control" required>
                            <option value="0">0</option>
                        </select>
                        <input type="date" name="date" id="" class="form-control" style="margin-left: 8px;"
                            value="{{ $game_device->date }}" required>
                    </div>
                    <br>
                    <div class="type ">
                        <span><b>Image</b></span>
                    </div>
                    <div class="mt-3 mb-3 img">
                        <img src="{{asset('/assets/products/images/game/'.$game_device->image.'')}}" alt="" width="600"
                            height="350">
                    </div>
                    <div class="form-group form-line">
                        <input type="file" name="image" id="" class="form-control">
                    </div>
                </div>
                <div class="card-footer mt-3"><button class="btn btn-success" type="submit">Enregistrer</button></div>
            </form>

        </div>
    </div>
