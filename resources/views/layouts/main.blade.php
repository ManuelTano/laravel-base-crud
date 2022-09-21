<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>DC Comics | Home</title>
</head>
<body>
    @include('includes.header')
    <section id="jumbo">
    </section>
    <main>
        @yield('main-content')
    </main>
    <div class="shop py-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-2">
                    <img src="{{ asset('../images/buy-comics-digital-comics.png') }}" alt="">
                    <span class="text-white">DIGITAL COMICS</span>
                </div>
                <div class="col-2">
                    <img src="{{ asset('../images/buy-comics-merchandise.png') }}" alt="">
                    <span class="text-white">DC MERCHANDISE</span>
                </div>
                <div class="col-2">
                    <img src="{{ asset('../images/buy-comics-shop-locator.png') }}" alt="">
                    <span class="text-white">SUBSCRIPTION</span>
                </div>
                <div class="col-2">
                    <img src="{{ asset('../images/buy-comics-subscriptions.png') }}" alt="">
                    <span class="text-white">COMIC SHOP</span>
                </div>
                <div class="col-2">
                    <img src="{{ asset('../images/buy-dc-power-visa.svg') }}" alt="">
                    <span class="text-white">DC POWER VISA</span>
                </div>
           </div>
        </div>
    </div> 
    @include('includes.footer')
</body>
</html>
