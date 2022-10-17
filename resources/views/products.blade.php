@extends('layouts.main')

@section('content')

<!-- Products Start Here -->
<section id="product1" class="section-p1">
    <h2>All Products</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">

        @foreach ($products as $product )
            
        <div class="pro">
            <img src="{{ asset('images/'.$product->image) }}" alt="">
            <div class="des">
                <span>{{ $product->name }}</span>
                <h5>{{ $product->description }}</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                @if ($product->sale_price)
                    <h4>KSH {{ $product->sale_price }}</h4>
                    <h4 style="text-decoration: line-through;">
                    ${{ $product->price }}</h4>
                @else
                <h4>KSH {{ $product->price }}</h4>
                @endif 
            </div>
            <a href="#"><i class="fa fa-cart-arrow-down cart"></i></a>
        </div>

        @endforeach
    </div>

</section>

<section id="banner" class="section-m1">
    <h4>Repair Services</h4>
    <h2>Up to <span>70% Off</span>All t-shirts & Accessories</h2>
    <button class="normal">Explore More</button>
</section>


<section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>The best classic dress is on sale at Andy's Mart</span>
        <button class="white">Learn more</button>
    </div>
    <div class="banner-box">
        <h4>crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>The best classic dress is on sale at Andy's Mart</span>
        <button class="white">Learn more</button>
    </div>
</section>


<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up For Newsletter</h4>
        <p>Get E-mail updates about our latetst shop and <span>special offers</span></p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your Email Address">
        <button class="normal">Sign Up</button>
    </div>
</section>

@endsection