@extends('layout.app')

@section('page_title')
    <title>Helpee</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/products.css') }}">
@endsection

@section('content')
    <main>
    <div id="carouselExampleDark" class="carousel carousel-dark slide carousel_cont" data-bs-ride="carousel" style="margin-top:-5px">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('/assets/car_temp_img1.jpg') }}" alt="slide1" class="carousel_item">
                <div class="carousel-caption" style="color:white;">
                    <h5>Vapor Store</h5>
                    <p>We bring to our customers first class customised clothing.</p>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="10000">
                <img src="{{ asset('/assets/car_temp_img2.jpg') }}" alt="slide2" class="carousel_item">
                <div class="carousel-caption" style="color:white;">
                    <h5>Vapor Store</h5>
                    <p>Owning our products will bring you back to year '95.</p>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="10000">
                <img src="{{ asset('/assets/car_temp_img3.jpg') }}" alt="slide3" class="carousel_item">
                <div class="carousel-caption" style="color:white;">
                    <h5>Vapor Store</h5>
                    <p>Bring forth the nostalgia to our customers.</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
   
    
    <div class="row choice_div">
        <h1>Our products</h1>
      
        <button type="button" class="btn section_btn btn-primary btn-lg" onclick=window.location.href="{{ URL('/products')}}"> Browse </button>
        <hr>
        <!-- <button type="button" class="btn section_btn btn-primary btn-lg col-2" onclick="window.location.href='#'"> Men</button>
        
        <button type="button" class="btn section_btn btn-primary btn-lg col-2" onclick="window.location.href='#'"> Women </button>
        
        <button type="button" class="btn section_btn btn-primary btn-lg col-2" onclick="window.location.href='#'"> Children </button> -->
    </div>
   

    <div class="row products_row">

        
    </div>
    </main>
@endsection  