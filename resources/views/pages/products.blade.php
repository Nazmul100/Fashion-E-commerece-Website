@extends('layouts.main')

@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-12">
             <div class="section-heading">
                 <div class="line-dec"></div>
                 <h1>All Products</h1>
             </div>
         </div>
         <div class="row col-md-12">
             @foreach($products as $product)
                 <div class="col-md-3">
                     <a href="{{ url ('/single-product') }}">
                         <div class="featured-item text-center">
                             <img style="width: 250px; height: 250px"
                                  src="{{ asset ('images/'.$product->image)}}" alt="Item">
                             <h4>{{ $product->name }}</h4>
                             @if ($product->sale_price)
                                 <h5>{{ $product->sale_price }}</h5>
                                 <h6 style="text-decoration: line-through">${{ $product->price }}</h6>
                             @endif
                             <form>
                                 <input type="submit" class="btn btn-primary mt-3" value="Add To Cart"/>
                             </form>
                         </div>
                     </a>
                 </div>
             @endforeach
         </div>
     </div>
 </div>




@endsection
