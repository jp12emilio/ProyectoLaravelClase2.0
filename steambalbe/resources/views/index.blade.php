@extends('layouts.master')
@section('content')
 <link rel="stylesheet" type="text/css" href="./css/index.css">
<body class="body">
    <div id="carouselExampleSlidesOnly" class="carousel slide d-none d-sm-block" data-ride="carousel">
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

<h2 class="clearfoot oferta text-light">OFERTAS: </h2>
<div class="card-deck row justify-content-center">
    <?php $count = 0; ?>
    @foreach( $arrayJuegos as $key => $juegos )
    <?php if($count == 5) break; ?>
    <div class="p-4 card col-sm-6 col-md-2 juegos">
        <a href="{{ url('/catalog/show/' . $juegos->id ) }}">
            <img class="card-img-top juegos" src="{{$juegos->image}}" style="height:150px"/>
            <div class="card-body">
            <h4 class="card-title" style="min-height:45px;margin:5px 0 10px 0">
                {{$juegos->name}}
            </h4>
            <p class="card-text">{{$juegos->price}}€</p>
            </div>
        </a>
    </div>
    <?php $count++; ?>
    @endforeach
    </div>
</div>
<div class="clearfoot"></div>
<!-- <div class="card-deck row justify-content-center cards"> -->
    <!-- <div class="card col-2 juegos"> -->
        <!-- <img class="card-img-top juegos" src="./img/diablo.png"> -->
        <!-- <div class="card-body"> -->
            <!-- <h5 class="card-title">Diablo III</h5> -->
            <!-- <p class="card-text">60 euros</p> -->
        <!-- </div> -->
    <!-- </div> -->
    <!-- <div class="card col-2 juegos"> -->
        <!-- <img class="card-img-top" src="./img/battlefield.jpg"> -->
        <!-- <div class="card-body"> -->
            <!-- <h5 class="card-title">Battlefield 4</h5> -->
            <!-- <p class="card-text">59 euros</p> -->
        <!-- </div> -->
        <!-- </div> -->
    <!-- <div class="card col-2 juegos"> -->
        <!-- <img class="card-img-top" src="./img/fortnite.jpg"> -->
        <!-- <div class="card-body"> -->
            <!-- <h5 class="card-title">Fornite</h5> -->
            <!-- <p class="card-text">20 euros</p> -->
        <!-- </div> -->
    <!-- </div> -->
    <!-- <div class="card col-2 juegos"> -->
        <!-- <img class="card-img-top" src="./img/skyrim.png"> -->
        <!-- <div class="card-body"> -->
            <!-- <h5 class="card-title">Skyrim</h5> -->
            <!-- <p class="card-text">49 euros</p> -->
        <!-- </div> -->
    <!-- </div> -->
    <!-- <div class="card col-2 juegos"> -->
        <!-- <img class="card-img-top" src="./img/darksoul.jpg"> -->
        <!-- <div class="card-body"> -->
            <!-- <h5 class="card-title">Dark Soul</h5> -->
            <!-- <p class="card-text">30 euros</p> -->
        <!-- </div> -->
    <!-- </div> -->
  <!-- </div> -->
<!-- </div> -->
</body>
@endsection