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
    public function product(){
        $products = DB::table('products')->paginate(2);
        return view('pages.products',['products' => $products ]);
    }

    public function newest(){
        $products = DB::table('products')->orderBy('id','desc')->paginate(2);
        return view('pages.products',['products' => $products ]);
    }

    public function lowest(){
        $products = DB::table('products')->orderBy('sale_price','asc')->paginate(2);
        return view('pages.products',['products' => $products ]);
    }

    public function highest(){
        $products = DB::table('products')->orderBy('sale_price','desc')->paginate(2);
        return view('pages.products',['products' => $products ]);
    }
}
