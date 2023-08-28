@extends('myhome.products.showProducts.layout')
@section('name')
    {{ $phone->name }}
@endsection
@section('price')
    {{ $phone->price }}
@endsection
@section('quantity')
    {{ $phone->quantity }}
@endsection
@section('date')
    {{ $phone->date }}
@endsection
@section('popular')
    {{ $phone->popular }}
@endsection
@section('description')
    {{ $phone->description }}
@endsection
@section('img')
<img src="{{ asset('/assets/products/images/phone/' . $phone->image . '') }}" alt="">
@endsection