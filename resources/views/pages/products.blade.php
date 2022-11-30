@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>All Products</h1>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">

            </div>
            <div class="col-md-4 col-sm-12">
                <div class="section-heading">
                    <div id="filters" class="button-group">
                        <a href="{{ url ('/product')}}" data-filters="*">All Products</a>
                        <button class="btn btn-primary" data-filters=".new">Newest</button>
                        <button class="btn btn-primary" data-filters=".low">Low Price</button>
                        <button class="btn btn-primary" data-filters=".high">High Price</button>
                    </div>
                </div>
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

        <style type="text/css">
            svg {
                width: 20px;
                height: 20px;
            }

            nav p {
                display: none;
            }

            nav .flex a {
                display: none;
            }

        </style>

        <div class="text-center">
            {{ $products->links() }}
        </div>
    </div>

@endsection
