@extends('layouts.main')

@section('content')

<section class="cart container mt-3 my-3 py-5">
    <div class="container mt-2">
        <h4>Your Cart</h4>
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
                    <img src="{{ asset('images/bhat1.jpg') }}" alt="">
                <div>
                    <p>Bucket Hat</p>
                    <small><span>KSH</span>250</small>
                    <br>
                    <form>
                        <input type="submit" name="" class="remove-btn" value="remove">
                    </form>
                </div>
                </div>
            </td>

            <td>
                <form>
                    <input type="number" name="" value="1">
                    <input type="submit" value="edit" class="edit-btn" name="" id="">
                </form>
            </td>

            <td>
                <span class="product-price">KES250</span>
            </td>

        </tr>
    </table>
    <div class="cart-total">
        <table>
            <tr>
                <td>Total</td>
                <td>250</td>
            </tr>
        </table>
    </div>
    <div class="checkout-container">
        <form>
            <input type="submit" class="btn checkout-btn" value="Checkout" name="">
        </form>
    </div>

</section>

@endsection