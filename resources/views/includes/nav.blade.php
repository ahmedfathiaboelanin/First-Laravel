<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="{{ asset('style/home.css') }}">
    <link rel="stylesheet" href="{{ asset('style/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('style/footer..css') }}">
    <link rel="stylesheet" href="{{ asset('style/all.min.css') }}">
    <link rel="icon" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&family=Anton&family=Dancing+Script&family=DynaPuff&display=swap" rel="stylesheet">
</head>
<body>
    <section id="sec1" class="sec1">
        <nav id="nav">
            <div class="nav_left">
                <a href="/"><img src="{{ asset('images/logo.png') }}" alt=""></a>
            </div>
            <div class="nav_right">
                <ul>
                    <li class="_520"><a href="/">Home</a></li>
                    <li class="_520"><a href="/products">Products</a></li>
                    <li class="_615"><a href="/about">About</a></li>
                    <li class="_615"><a href="/contact">Contact</a></li>
                    <li class="_380"><a href="/account">Account</a></li>
                    <li class="_380"><a href="/cart"><img src="{{ asset('images/cart.png') }}" alt=""></a></li>
                    <div id="hamburger" class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </ul>
            </div>
        </nav>