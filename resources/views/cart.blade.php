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

        @if (Session::has('cart'))

            @foreach (Session::get('cart') as $id=>$product )
                

            <tr>
                <td>
                    <div class="product-info">
                        <img src="{{ asset('images/'.$product['image']) }}" alt="">
                    <div>
                        <p>{{ $product['name'] }}</p>
                        <small><span>KSH</span>{{ $product['price'] }}</small>
                        <br>
                        <form method="POST" action="{{ route('remove_from_cart') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product['id'] }}">
                            <input type="submit" name="" class="remove-btn" value="remove">
                        </form>
                    </div>
                    </div>
                </td>

                <td>
                    <form method="POST" action="{{ route('edit_product_quantity') }}">
                        @csrf
                        <input type="number" name="quantity" value="{{ $product['quantity'] }}">
                        <input type="hidden" name="id" value="{{ $product['id'] }}">
                        <input type="submit" value="edit" class="edit-btn" name="edit_product_quantity_btn">
                    </form>
                </td>

                <td>
                    <span class="product-price">KES {{ $product['quantity'] * $product['price'] }}</span>
                </td>

            </tr>

            @endforeach

        @endif

    </table>
    <div class="cart-total">
        <table>
            @if(Session::has('total'))
            <tr>
                <td>Total</td>
                <td>KSH{{ Session::get('total') }}</td>
            </tr>
            @endif
        </table>
    </div>
    <div class="checkout-container">
        @if (Session::has('total'))
        @if (Session::get('total') != null)
  
        <form>
            <input type="submit" class="btn checkout-btn" value="Checkout" name="">
        </form>
        
        @endif  
        @endif

    </div>

</section>

@endsection