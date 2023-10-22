<x-layout>
    <x-slot:style>
        <link rel="stylesheet" href="{{ asset('style/prouduct.css') }}">
    </x-slot:style>
    <section id="sec2" class="sec2">
        <div class="_2nd">
            <h1>
                <span>All Products</span>
                <select name="" id="">
                    <option value="">sort by default</option>
                    <option value="">sort by price</option>
                    <option value="">sort by popularity</option>
                    <option value="">sort by rating</option>
                    <option value="">sort by safe</option>
                </select>
            </h1>
            @if(count($lists)!==0)
                @foreach ($lists as $list)
                    <x-product-card :list='$list'/>
                @endforeach
            @else
                <h1>No Products Found</h1>
            @endif
        </div>
    </section>        
</x-layout>