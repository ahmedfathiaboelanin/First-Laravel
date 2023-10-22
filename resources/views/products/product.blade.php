<x-layout>
    <x-slot:style>
        <link rel="stylesheet" href="{{ asset('style/product-page.css') }}">
        <link rel="stylesheet" href="{{ asset('style/nav.css') }}">
        <link rel="stylesheet" href="{{ asset('style/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('style/home.css') }}">
    </x-slot:style>
    <div class="container">
        <div class="col1 img">
            <img src="{{ asset($product->image) }}" alt="product-image">
        </div>
        <div class="col2 text">
            <h2><span> {{$product->title}}</span></h2>
            <h3><span>Owner : </span>
                
                    {{$owner->name}}
                
            </h3>
            <p class="desc"><span>Description :</span> <br> {{$product->description}}</p>
            <div class="" style="display: flex; gap: 20px">
                <p><span>Rate :</span> {{$product->rate}} ⭐</p>
                <p><span>Price :</span> $ {{$product->price}}</p>
            </div>
            <a href="/cart" class="btn" style="padding: 10px; font-size: 15px">Add to cart</a>
        </div>
    </div>
    <div class="comments">
            @foreach ($comments as $comment)
                <p class="comment">
                    <img class="user" src="{{ asset('images/user-2.png') }}" />
                    {{$comment->comment}}
                </p>
            @endforeach
    </div>
</x-layout>