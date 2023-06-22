<?php

namespace App\Http\Controllers\produit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    function index(){
        return view('home.main.main');
    }
}
