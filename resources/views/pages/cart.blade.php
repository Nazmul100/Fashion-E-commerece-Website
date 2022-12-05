@extends('layouts.main')

@section('content')
    <section class="cart container mt-2 my-3 py-5"
    <div class="container mt-2">
        <h4> Your Cart</h4>
    </div>

    <table class="pt-5">
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>

        <tr>
            <td>
                <div class="product-info">
                    <img src="{{ asset('images/product-01.jpg') }}" alt="dummy_image">
                    <div>
                        <p> White Shirt</p>
                        <small><span>$</span> 99</small>
                        <br/>
                        <form>
                            <input type="submit" name="" class="remove-btn" value="Remove">
                        </form>
                    </div>
                </div>
            </td>
            <td>
                <form>
                    <label>
                        <input type="number" name="" class="remove-btn" value="1">
                    </label>
                    <input type="submit" name="" class="edit-btn" value="edit">
                </form>
            </td>
            <td>
                <span class="product-price">$100</span>
            </td>

        </tr>
    </table>

    <div class="cart-total">
        <table>
            <tr>
                <td>Total</td>
                <td>100</td>
            </tr>
        </table>
    </div>

    <div class="checkout-container">
    <form>
        <input type="submit" name="" class="btn checkout-btn" value="checkout">
    </form>
    </div>

@endsection
