
        @include('includes.nav')
        <div class="container1">
            <div class="container1_left">
                <div class="dv">
                    <h1>Give your work out New style.</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, assumenda.</p>
                    <a href="/products">Explore now<i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
            <div class="container1_right">
                <img src="images/image1.png" alt="">
            </div>
        </div>
    </section>
    <section id="sec2" class="sec2">
        <div class="_1st">
            <div class="dv1">
                <img src="images/category-1.jpg" alt="">
            </div>
            <div class="dv1">
                <img src="images/category-2.jpg" alt="">
            </div>
            <div class="dv1">
                <img src="images/category-1.jpg" alt="">
            </div>
        </div>
        <div class="_2nd">
            <h1><span>Featured Products</span></h1>
            <div class="dv2">
                <img src="images/product-1.jpg" alt="">
                <p>Lorem ipsum dolor sit.</p>
                <p> 
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </p>
                <span>$50.00</span>
            </div>
            <div class="dv2">
                <img src="images/buy-3.jpg" alt="">
                <p>Lorem ipsum dolor sit.</p>
                <p> 
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </p>
                <span>$50.00</span>            
            </div>
            <div class="dv2">
                <img src="images/product-2.jpg" alt="">
                <p>Lorem ipsum dolor sit.</p>
                <p> 
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </p>
                <span>$50.00</span>            
            </div>
            <div class="dv2">
                <img src="images/product-4.jpg" alt="">
                <p>Lorem ipsum dolor sit.</p>
                <p> 
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </p>
                <span>$50.00</span>            
            </div>
        </div>
    </section>
    <section id="sec2" class="sec2">
        <div class="_2nd">
            <h1><span>latest Products</span></h1>
            @for($i=0; $i<8; $i++)
                <x-home-card/>
            @endfor
        </div>
    </section>
    <section class="sec3">
        <div class="dv3-1"><img src="images/exclusive.png" alt=""></div>
        <div class="dv3-2">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            <h2>Smart Band 4</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequuntur sequi saep!</p>
            <a href="/products">Buy now<i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
    </section>
    <section class="sec4">
        @for($i=0; $i<3; $i++)
            <x-testmonial/>
        @endfor
    </section>
    @include('includes.footer')
</body>
</html>
