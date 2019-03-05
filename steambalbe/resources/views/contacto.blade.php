<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
@extends('layouts.master')
@section('content')
<div id="all" class="clear">
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="contact" class="box color contactcolor">
                        <h1 class="text-center">Contacto</h1>
                        <p class="lead mt-2 ml-5">¿Tienes curiosidad por algo? ¿Tienes algún tipo de problema con nuestros productos?</p>
                        <p class="mt-2 ml-5">Por favor, no dude en contactarnos, nuestro centro de servicio al cliente está trabajando para usted 24/7.</p>
                        <hr>
                        <div class="row ml-5">
                            <div class="col-md-4">
                                <h3><i class="fa fa-map-marker"></i>Dirección</h3>
                                <p>Avenida Nº13<br>Paseo 2<br>primera esquina<br>España<br><strong>Granada</strong></p>
                            </div>
                            <!-- /.col-sm-4-->
                            <div class="col-md-4">
                                <h3><i class="fa fa-phone"></i> Centro de llamadas</h3>
                                <p class="text-muted">Este número es gratuito si llama desde Granada; de lo contrario, le recomendamos que utilice la forma de comunicación electrónica.</p>
                                <p><strong>+34 626 374 594</strong></p>
                            </div>
                            <!-- /.col-sm-4-->
                            <div class="col-md-4">
                                <h3><i class="fa fa-envelope"></i>Soporte electronico</h3>
                                <p class="text-muted">Por favor, siéntase libre de escribirnos un correo electrónico.</p>
                                <ul>
                                    <li><strong><a href="mailto:">balbe@gmail.com</a></strong></li>
                                </ul>
                            </div>
                            <!-- /.col-sm-4-->
                        </div>
                        <!-- /.row-->
                        <hr>
                        <div id="map" class="text-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.228178802623!2d73.50715871533407!3d4.175495896964287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b3f7f4f66f7a8d7%3A0x551356b1dfc49127!2sIslas+Maldivas!5e0!3m2!1ses!2ses!4v1550940910964" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <hr>
                    </div>
                </div>
                <!-- /.col-md-9-->

            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>