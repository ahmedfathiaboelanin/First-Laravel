@props(['list'])
<div class="dv2 dv2-0" style="margin: 20px 10px 20px 0px">
    <img src="{{ asset($list->image) }}" alt="">
    <p>{{$list['description']}}</p>
    <p> 
        @for($i=1;$i<$list['rate'];$i++)
            <i class="fa-solid fa-star"></i>
        @endfor
    </p>
    <span>{{$list['price']}} $</span>
    <div class="btns" style="display: flex; gap: 10px">
        <p class="p" style="margin-bottom: 20px;"><a href="/product/{{$list->id}}">Show Details</a></p>
        <p class="p"><a href="/cart">Buy now</a></p>
    </div>
</div>