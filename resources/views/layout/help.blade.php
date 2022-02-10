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



    <div class="row" style="margin-top: 101px;display: flex;justify-content: space-around;">
        <div class="col-4" style="margin-top:20px">
            <div class="row">
                <h1>Aby každý dostal potrebnú <span style="text-decoration:underline; color:#6297E7">pomoc</span>...</h1>
            </div>
            <div class="row">
                <p style="margin-top:10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget habitant vel nec viverra mauris sit quis tristique molestie. Ut et ac auctor sollicitudin amet neque enim. Massa nunc bibendum id id felis donec. Dignissim laoreet leo, eu duis amet, massa pulvinar scelerisque hac.
                </p>
                <p class="hidden">chcem sa zajebat</p>
            </div>
            <div class="row d-flex justify-content-between">
                <button type="button" class="btn btn-primary" style="width:40%; margin-top:15px;" onClick="document.getElementById('middle').scrollIntoView();">Potrebujem pomoc</button>
            
            </div>
        </div>
        <div class="col-4">
            <img src="{{ asset('/assets/photo1.png') }}"></img>
        </div>

    </div>
    <div id="middle" class="row" style="background-color:#6297E7; margin-top:150px;">

        <p class="d-flex justify-content-center" style="text-align:center; color:#E8F0FC; font-weight:400; font-size:30px; padding-top:20px; padding-bottom:20px"> O AKÝ TYP POMOCI MÁŠ ZÁUJEM ?</p>
    </div>

<div class="row"> 
<img src="{{ asset('/assets/image4.png') }}"></img>
</div>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="true" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header" style="background-color: #6297E7; display:flex; justify-content: center;">
            <div>
                <h5 id="offcanvasRightLabel" style="color:white;">Živý chat s tvojim Helperom</h5>
            </div>

        </div>
        <div class="offcanvas-body" style="background-color: #E8F0FC">
            ...
        </div>
    </div>
</main>
@endsection