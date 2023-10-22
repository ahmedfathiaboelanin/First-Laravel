<x-layout>
    <x-slot:style>
        <link rel="stylesheet" href="{{ asset('style/cart.css') }}">
    </x-slot:style>
    <section class="sec2">
        <div class="container">
            <table class="table">
                <tr class="first-row">
                    <td>product</td>
                    <td>quantity</td>
                    <td class="last-col">Price</td>
                </tr>
                <tr>
                    <td class="first-col">
                        <img src="images/buy-1.jpg" alt="">
                        <p>Lorem ipsum dolor <button>remove</button> .</p>
                    </td>
                    <td><input type="number" value="1"></td>
                    <td class="last-col">$50.00</td>
                </tr>
                <tr>
                    <td class="first-col">
                        <img src="images/buy-2.jpg" alt="">
                        <p>Lorem ipsum dolor <button>remove</button> .</p>
                    </td>
                    <td><input type="number" value="1"></td>
                    <td class="last-col">$40.00</td>
                </tr>
                <tr>
                    <td class="first-col">
                        <img src="images/buy-3.jpg" alt="">
                        <p>Lorem ipsum dolor <button>remove</button> .</p>
                    </td>
                    <td><input type="number" value="1"></td>
                    <td class="last-col">$100.00</td>
                </tr>
            </table>
            <table class="small-table">
                <tr>
                    <td>sub total:</td>
                    <td class="money">$190.00</td>
                </tr>
                <tr>
                    <td>tax:</td>
                    <td class="money">$50.00</td>
                </tr>
                <tr>
                    <td>total:</td>
                    <td class="money">$240</td>
                </tr>
            </table>
            <a href="account.html">confirm <i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
    </section>
</x-layout>