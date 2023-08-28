@extends('myhome.products.showProducts.layout')
@section('name')
    {{ $game_device->name }}
@endsection
@section('price')
    {{ $game_device->price }}
@endsection
@section('quantity')
    {{ $game_device->quantity }}
@endsection
@section('date')
    {{ $game_device->date }}
@endsection
@section('popular')
    {{ $game_device->popular }}
@endsection
@section('description')
    {{ $game_device->description }}
@endsection
@section('img')
<img src="{{ asset('/assets/products/images/game/' . $game_device->image . '') }}" alt="">
@endsection