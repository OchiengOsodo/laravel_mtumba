@extends('layouts.main')

@section('content')

<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="images/floral8.jpg" width="100%" id="MainImg" alt="">

        <div class="small-img-group">
            <div class="small-img-col">
                <img src="images/floral4.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="images/floral5.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="images/floral6.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="images/floral7.jpg" width="100%" class="small-img" alt="">
            </div>
        </div>
    </div>

    <div class="single-pro-details">
        <h6>Home / T-Shirt</h6>
        <h4>Men's Fashion T-Shirt</h4>
        <h2>KES1,000</h2>
        <select>
            <option>Select Size</option>
            <option>XL</option>
            <option>XXL</option>
            <option>Small</option>
            <option>Large</option>
        </select>
            <input type="number" name="" id="">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</span>
    </div>
</section>

<section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
        <div class="pro">
            <img src="images/blue floral shirt.jpg" alt="">
            <div class="des">
                <span>Floral Shirt</span>
                <h5>Blue Floral Shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>KES 1000</h4>
            </div>
            <a href="#"><i class="fa fa-cart-arrow-down cart"></i></a>
        </div>
        <div class="pro">
            <img src="images/blue floral shirt.jpg" alt="">
            <div class="des">
                <span>Floral Shirt</span>
                <h5>Blue Floral Shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>KES 1000</h4>
            </div>
            <a href="#"><i class="fa fa-cart-arrow-down cart"></i></a>
        </div><div class="pro">
            <img src="images/blue floral shirt.jpg" alt="">
            <div class="des">
                <span>Floral Shirt</span>
                <h5>Blue Floral Shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>KES 1000</h4>
            </div>
            <a href="#"><i class="fa fa-cart-arrow-down cart"></i></a>
        </div><div class="pro">
            <img src="images/blue floral shirt.jpg" alt="">
            <div class="des">
                <span>Floral Shirt</span>
                <h5>Blue Floral Shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>KES 1000</h4>
            </div>
            <a href="#"><i class="fa fa-cart-arrow-down cart"></i></a>
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

<script src="{{ asset('js/custom.js') }}"></script> 

@endsection