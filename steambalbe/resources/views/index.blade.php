@extends('layouts.master')
@section('content')
<body class="body">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="./img/slide1.png">
            </div>
            <div class="carousel-item">
                <img class="w-100" src="./img/slide2.jpg">
            </div>
            <div class="carousel-item">
                <img class="w-100" src="./img/slide3.jpg">
            </div>
        </div>
    </div>
 
<div class="mt-3 mb-3 card-deck row justify-content-center cards">
    <div class="p-3 card col-2 juegos">
        <img class="card-img-top juegos" src="./img/diablo.png">
        <div class="card-body">
            <h5 class="card-title">Diablo III</h5>
            <p class="card-text">60 euros</p>
        </div>
    </div>
    <div class="p-3 card col-2 juegos">
        <img class="card-img-top" src="./img/battlefield.jpg">
        <div class="card-body">
            <h5 class="card-title">Battlefield 4</h5>
            <p class="card-text">59 euros</p>
        </div>
    </div>
    <div class="p-3 card col-2 juegos">
        <img class="card-img-top" src="./img/fortnite.jpg">
        <div class="card-body">
            <h5 class="card-title">Fornite</h5>
            <p class="card-text">20 euros</p>
        </div>
    </div>
    <div class="p-3 card col-2 juegos">
        <img class="card-img-top" src="./img/skyrim.png">
        <div class="card-body">
            <h5 class="card-title">Skyrim</h5>
            <p class="card-text">49 euros</p>
        </div>
    </div>
    <div class="p-3 card col-2 juegos">
        <img class="card-img-top" src="./img/darksoul.jpg">
        <div class="card-body">
            <h5 class="card-title">Dark Soul</h5>
            <p class="card-text">30 euros</p>
        </div>
    </div>
  </div>
</div>
</body>
@endsection