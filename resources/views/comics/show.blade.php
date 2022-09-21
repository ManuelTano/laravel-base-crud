@extends('layouts.main')
@section('main-content')
<div class="row bg-blue">
</div>

<section id="white" class="py-5">
    <div class="small-container">
        <div class="row">
            <div class="col-8 m-0 p-0 ">
                <div class="cards ">
                    <div class="relative">
                        <img src="{{ $comic['thumb'] }}" alt="" class="thumb">
                    </div>
                    <div class="book text-center">
                        <span class="text-uppercase">{{ $comic['type'] }}</span>
                    </div>
                    <h4 class="title fw-bold mb-4">{{ $comic['title'] }}</h4>
                    <div class="row margin border-green">
                        <div class="col-9 border-right bg-green d-flex p-2 justify-content-between">
                            <span class="green fw-bold">U.S. price:
                                <span class="text-white">{{ $comic['price'] }}</span></span>
                            <span class="green fw-bold">AVAILABLE</span>
                        </div>
                        <div class="col-3 bg-green p-2 text-center">
                            <span class="text-white fw-bold">Check Availability</span>
                        </div>
                    </div>
                    <p class="mt-4">{{ $comic['description'] }}</p>
                </div>
            </div>
            <div class="col-4 text-end">
                <h5 class="text-grey">ADVERTISEMENT</h5>
                <img src="{{ asset('../images/madv.jpg') }}" alt="adv">
            </div>
        </div>
    </div>
</section>

<section id="grigio" class="border-top">
    <div class="small-container py-5">

        <div class="row justify-content-between">
            <div class="col-6">
                <div class="row border-bottom ">
                    <h3 class="fw-bold mb-4">Talent</h3>
                </div>
                <div class="row border-bottom py-1">
                    <div class="col-3">
                        Art by:
                    </div>
                    <div class="col-9 text-blue">
                    </div>
                </div>
                <div class="row border-bottom py-1">
                    <div class="col-3">
                        Written by:
                    </div>
                    <div class="col-9 text-blue">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row border-bottom">
                    <h3 class="fw-bold mb-4">Specs</h3>
                </div>
                <div class="row border-bottom py-1">
                    <div class="col-4">
                        Series:
                    </div>
                    <div class="col-8">
                        <span class="text-uppercase text-blue">{{ $comic['series'] }}</span>
                    </div>
                </div>
                <div class="row border-bottom py-1">
                    <div class="col-4">
                        U.S. Price:
                    </div>
                    <div class="col-8">
                        {{ $comic['price'] }}
                    </div>
                </div>
                <div class="row border-bottom py-1">
                    <div class="col-4">
                        On Sale Date:
                    </div>
                    <div class="col-8">
                        {{ $comic['sale_date'] }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-3"></div>
        <div class="col-3"></div>
        <div class="col-3"></div>
    </div>
</section>
@endsection

