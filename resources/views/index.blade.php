@extends('layouts.main')

@section('content')

<section id="hero">
    <h4>Trade-in-offer</h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save more with coupons & up to 70% off</p>
    <button>Shop Now</button>
</section>

<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="{{ asset('images/fs.png') }}" alt="">
        <h6>Free Shipping</h6>
    </div>
    <div class="fe-box">
        <img src="images/fs.png" alt="">
        <h6>Online Order</h6>
    </div>
    <div class="fe-box">
        <img src="images/fs.png" alt="">
        <h6>Save Money</h6>
    </div>
    <div class="fe-box">
        <img src="images/fs.png" alt="">
        <h6>24/7 Support</h6>
    </div>
    <div class="fe-box">
        <img src="images/fs.png" alt="">
        <h6>Promotions</h6>
    </div>

    
    
</section>

<!-- Products Start Here -->
<section id="product1" class="section-p1">
    <h2>Featured Product</h2>
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

<!-- Mens Starts Here -->
<section id="product1" class="section-p1">
    <h2>Men's</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
        @foreach ($men_products as $product )
            
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

<!-- Women's Starts Here -->
<section id="product1" class="section-p1">
    <h2>Women's</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
        @foreach ($women_products as $product )
            
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

<!-- Accesories Starts Here -->
<section id="product1" class="section-p1">
    <h2>Accesories</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
        @foreach ($accessories_products as $product )
            
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