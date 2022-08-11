<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function store(){
        return view('home.product_list');
    }
    public function product(){
        return view('home.product');
    }
    public function cart(){
        return view('home.cart');
    }
    public function checkout(){
        return view('home.checkout');
    }
    public function orderComplete(){
        return view('home.order-complete');
    }
}
