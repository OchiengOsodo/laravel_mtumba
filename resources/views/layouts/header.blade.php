<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mtumba</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/3e35fa2922.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
       
        
    </head>
    <body>
        <section id="header">
            <a href="#"><img src="images/logo2.png" class="logo" alt=""></a>

            <div>
                <ul id="navbar">
                    <li><a  href="{{ url('/') }}">Home</a></li>
                    <li><a  href="{{ url('/men') }}">Mens</a></li>
                    <li><a href="{{ url('/women') }}">Womens</a></li>
                    <li><a href="{{ url('/accessories') }}">Accessories</a></li>
                    <li id="lg-bag"><a href="{{ url('/cart') }}"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a></li>
                    <a href="#" id="close"><i class="fa fa-times"></i></a>
                </ul>
            </div>
            <div id="mobile">
                <a href="cart.html"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>