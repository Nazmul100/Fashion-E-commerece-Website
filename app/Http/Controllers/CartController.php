<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(){
        return view('pages.cart');
    }

    public function add_to_cart(Request $request){
        //if user is already added a product to cart
          if($request->session()->has('cart')){
              $cart = $request->session()->get('cart');
              //check if product already exists in  cart   or not
               $products_array_id = array_column($cart, 'id'); //(1,2)
               $id=$request->input('id');

               if(!in_array($id, $products_array_id)) {

                   $id=$request->input('id');
                   $name=$request->input('name');
                   $image=$request->input('image');
                   $price=$request->input('price');
                   $quantity=$request->input('quantity');
                   $sale_price=$request->input('sale_price');

                   if ($sale_price !=null){
                       $price_to_charge=$sale_price;
                   }else{
                       $price_to_charge=$price;
                   }

                   $product_array = array (
                       'id' => $id,
                       'name' => $name,
                       'image' => $image,
                       'price' => $price,
                       'sale_price' => $sale_price,
                       'quantity' => $quantity

                   );

                   $cart[$id]= $product_array;
                   $request = session()->put('cart',$cart);

                   return view('cart');



               } else {
                   echo '<script>alert("product is already in cart"); </script>';

               }

              return view('cart');

          }
          //if this is the first product to be added , then create a cart
          else {
              $cart = $request->session()->get('cart');
              $id=$request->input('id');
              $name=$request->input('name');
              $image=$request->input('image');
              $price=$request->input('price');
              $quantity=$request->input('quantity');
              $sale_price=$request->input('sale_price');

              if ($sale_price !=null){
                  $price_to_charge=$sale_price;
              }else{
                  $price_to_charge=$price;
              }

              $product_array = array (
                  'id' => $id,
                  'name' => $name,
                  'image' => $image,
                  'price' => $price,
                  'sale_price' => $sale_price,
                  'quantity' => $quantity

              );

              $cart[$id]= $product_array;
              $request = session()->put('cart',$cart);

              return view('cart');


          }
    }




}
