@extends('myhome.products.showProducts.layout')
@section('name')
    {{ $pc_device->name }}
@endsection
@section('price')
    {{ $pc_device->price }}
@endsection
@section('quantity')
    {{ $pc_device->quantity }}
@endsection
@section('date')
    {{ $pc_device->date }}
@endsection
@section('popular')
    {{ $pc_device->popular }}
@endsection
@section('description')
    {{ $pc_device->description }}
@endsection
@section('img')
<img src="{{ asset('/assets/products/images/pc/' . $pc_device->image . '') }}" alt="">
@endsection