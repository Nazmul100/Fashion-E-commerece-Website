<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index(){
        $products = DB::table('products')->limit(4)->get();
        $men_products = DB::table('products')->where('type','men')->limit(2)->get();
        $women_products = DB::table('products')->where('type','women')->limit(2)->get();

        return view('index',['products' => $products ,'men_products' =>$men_products,'women_products' =>$women_products]);
    }
}
