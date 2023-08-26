@extends('myhome.admin.admin')
@section('product-actions')
    @extends('myhome.products.createProductForm.layout')
    @section('store-route')
    {{ route('pcStore') }}
@endsection
@endsection