<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    {{$style}}
    
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
    </section>
        {{$slot}}
    <footer id="foot">
        <p><i class="fa-solid fa-copyright"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, veniam.</p>
        <ul>
            <li><i class="fa-solid fa-id-badge"></i>Contact</li>
            <li><a href="contact"><i class="fa-solid fa-address-book"></i>contact page</a></li>
            <li><a href=""><i class="fa-brands fa-facebook"></i>facebook</a></li>
            <li><a href=""><i class="fa-brands fa-square-whatsapp"></i>whats app</a></li>
            <li><a href=""><i class="fa-brands fa-square-instagram"></i>instagram</a></li>
            <li><a href=""><i class="fa-brands fa-linkedin"></i>linked in</a></li>
            <li><a href=""><i class="fa-brands fa-square-github"></i>Git hub</a></li>
        </ul>
        <ul>
            <li><i class="fa-solid fa-link"></i>Links</li>
            <li><a href="/">Home</a></li>
            <li><a href="/contact">contact page</a></li>
            <li><a href="/products">products</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/account">Account</a></li>
            <li><a href="/cart">cart</a></li>
        </ul>
        <ul>
            <li>Contact</li>
            <li><a href="contact"><i class="fa-solid fa-address-book"></i>contact page</a></li>
            <li><a href=""><i class="fa-brands fa-facebook"></i>facebook</a></li>
            <li><a href=""><i class="fa-brands fa-square-whatsapp"></i>whats app</a></li>
            <li><a href=""><i class="fa-brands fa-square-instagram"></i>instagram</a></li>
            <li><a href=""><i class="fa-brands fa-linkedin"></i>linked in</a></li>
            <li><a href=""><i class="fa-brands fa-square-github"></i>Git hub</a></li>
        </ul> 
    </footer>
    <a href="#nav" class="top"><i class="fa-solid fa-circle-arrow-up"></i></a>
    <a href="#foot" class="down"><i class="fa-solid fa-circle-arrow-down"></i></a>
    <aside id="side">
        <ul>
            <a href="/"><li>Home</li></a>
            <a href="/products"><li>Products</li></a>
            <a href="/about"><li>About</li></a>
            <a href="/contact"><li>Contact</li></a>
            <a href="/account"><li>Account</li></a>
            <a href="/cart"><li>cart</li></a>
        </ul>
    </aside>
    <script src="{{ asset('scripts/hamburger.js') }}"></script>
    <script src="{{ asset('scripts/product.js') }}"></script>
</body>
</html>
