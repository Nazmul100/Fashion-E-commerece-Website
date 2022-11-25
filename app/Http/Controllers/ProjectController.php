<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index(){
        $products = DB::table('products')->get();

        return view('index',['products' => $products]);
    }
}
