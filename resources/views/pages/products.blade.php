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
{{--            <div class="col-md-4 col-sm-12">--}}

{{--            </div>--}}
            <div class="col-md-8 col-sm-12">
                <div class="section-heading">
                    <div id="filters" class="button-group">
                        <a  href="{{ url ('/product')}}" data-filters="*">All-Products</a>
                        <a style="margin-left: 10px"  href="{{ url ('/newest')}}" data-filters=".new">Newest</a>
                        <a style="margin-left: 10px" href="{{ url ('/lowest')}}" data-filters=".low">Low-Price</a>
                        <a style="margin-left: 10px" href="{{ url ('/highest')}}" data-filters=".high">High-Price</a>
                        <a style="margin-left: 10px" href="{{ url ('/men')}}" data-filters=".men">Men</a>
                        <a style="margin-left: 10px" href="{{ url ('/women')}}" data-filters=".women">Women</a>
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
                            <form action=" {{ route("add_to_cart") }}" method="POST">
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="name" value="{{ $product->name }}">
                                <input type="hidden" name="image" value="{{ $product->image }}">
                                <input type="hidden" name="price" value="{{ $product->price }}">
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="sale_price" value="{{ $product->sale_price }}">
                                <input type="submit" name="add_to_cart" class="btn btn-primary mt-3" value="Add To Cart"/>
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
    </div>

@endsection
