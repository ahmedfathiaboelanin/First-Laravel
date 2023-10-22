<x-layout>
    <x-slot:style>
        <link rel="stylesheet" href="{{ asset('style/account.css') }}">
    </x-slot:style>
    <section class="sec2">
       <div class="left">
        <img src="images/image1.png" alt="">
       </div>
       <div id="up" class="right">
        <h1>Sign Up</h1>
        <form>
            <input type="text" placeholder="First name">
            <input type="text" placeholder="Last name">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="password">
            <input type="password" placeholder="confirm password">
        </form>
        <input id="signin" type="submit" value="Submit">
        <button id="signin1">Do You have account ?</button>
       </div>
       <div id="in" class="right">
        <h1>Sign in</h1>
        <form action="/">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="password">
            <input type="submit" value="Send">
        </form>
        <button id="signup">Don’t have an account !!</button>
       </div>
    </section>
    <script src="scripts/account.js"></script>
</x-layout>
