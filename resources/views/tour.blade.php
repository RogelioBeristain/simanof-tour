@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row ">
        <div class="col-md-12">
            <div class="card  bg-transparent border-0 ">

                <div class="card-body">
                    <div class="row mx-auto">

                        <div class="col-md-6 ">
                            <div class="row  mt-3 ">
                                <div class="col-md-12">
                                    <div class="">
                                        <p class="text-regular-j"> <span class="text-strong">SIMANOF TOUR</span> El Tour
                                            Simanof es una iniciativa de Siman
                                            Orchestral Foundation. El cual tiene como
                                            proposito desarrollar un modelo de
                                            excelencia y una comunidad nacional de
                                            músicos de diversas partes del mundo.
                                            Jóvenes músicos de diversas regiones y
                                            orígenes se convertirán en embajadores de sus programas, aprendiendo de
                                            directores y mentores de artistas de renombre mundial en hermosos escenarios
                                            y
                                            salas de conciertos.
                                            La misión del Tour es generar espacios para todos los niños y jóvenes que
                                            posean
                                            un talento musical sobresaliente, incentivando así el desarrollo de su
                                            carrera
                                            profesional.</p>

                                    </div>


                                </div>

                            </div>
                        </div>



                        <div class="col-md-6 mt-3 ">
                            <img class="picture-secundary rounded " src="{{asset('assets/logo-simanof-1.jpg') }}"
                                alt="">
                            <p class="text-header text-center">Every year we bring music to new horizons.</p>


                        </div>
                    </div>

                    <div class="row justify-content-center ">
                        <div class="col-md-8 ">

                            <div class="mx-auto">

                                <h3 class="text-center text-title">

                                    <strong>
                                        See you in
                                        <br>

                                        <div class="text-regular">
                                            <span class="text-regular-orange">
                                                Tour Simanof
                                            </span>

                                            <span class="text-blue">
                                                Italy!
                                            </span>
                                        </div>

                                    </strong>

                                </h3>

                            </div>

                            <div>

                                <table class="table table-striped">


                                    <tbody>
                                        <tr>
                                            <th scope="row">30 de Marzo 2021</th>
                                            <td>Comienza el proceso de audiciones.</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">30 de Abril 2021</th>
                                            <td>Último día para el envío de audiciones a través de la
                                                red electrónica.</td>

                                        </tr>

                                        <tr>
                                            <th scope="row">15 de Abril 2021</th>
                                            <td>Aviso de admisión al TOUR SIMANOF ITALIA 2022.</td>

                                        </tr>

                                        <tr>
                                            <th scope="row">Abril del 2022</th>
                                            <td>Campamento de preparación, México</td>

                                        </tr>

                                        <tr>
                                            <th scope="row">Junio del 2022</th>
                                            <td>Campamento de preparación Miami, Florida.</td>

                                        </tr>

                                        <tr>
                                            <th scope="row">19 al 29 de Julio 2022</th>
                                            <td>TOUR SIMANOF ITALIA 2022.</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>



                            <div class="grid-gallery  pt-5">
                                <a class="grid-gallery__item" >
                                    <img class="grid-gallery__image" src="{{ asset('/img_tour/pic (1).jpg') }}">
                                </a>
                                <a class="grid-gallery__item" >
                                    <img class="grid-gallery__image" src="{{ asset('/img_tour/pic (2).jpg') }}">
                                </a>

                                <a class="grid-gallery__item" >
                                    <img class="grid-gallery__image" src="{{ asset('/img_tour/pic (3).jpg') }}">
                                </a>

                                <a class="grid-gallery__item" >
                                    <img class="grid-gallery__image" src="{{ asset('/img_tour/pic (4).jpg') }}">
                                </a>

                                <a class="grid-gallery__item" >
                                    <img class="grid-gallery__image" src="{{ asset('/img_tour/pic (5).jpg') }}">
                                </a>

                                <a class="grid-gallery__item" >
                                    <img class="grid-gallery__image" src="{{ asset('/img_tour/pic (6).jpg') }}">
                                </a>

                                <a class="grid-gallery__item" >
                                    <img class="grid-gallery__image" src="{{ asset('/img_tour/pic (7).jpg') }}">
                                </a>

                                <a class="grid-gallery__item" >
                                    <img class="grid-gallery__image" src="{{ asset('/img_tour/pic (8).jpg') }}">
                                </a>





                            </div>

   @guest
                            <div class="mx-auto">
                                <p class="text-center text-title text-regular">
                                    <span class="text-blue">
                                          <a href="{{ route('register') }}"> Sign up</a>
                                    </span> to be one of the first to <br> know about the
                                    updates of the <br> <span class="text-orange">
                                        Tour Simanof Italy!
                                    </span>
                                </p>
                            </div>

                                    <div class="text-center">
                                <a class="btn btn-primary btn-xl" href="{{ route('register') }}" role="button">Sign Up</a>

                            </div>
                            @else


                            <div class="mx-auto">
                                <p class="text-center text-title text-regular">
                                    <span class="text-blue">
                                          <a href="{{ route('profile') }}"> Ya puedes hacer tu audición </a>
                                    </span>  <br>
                                    Enviar tu audición es el primer paso para ser parte de <span class="text-orange">Tour Simanof 2021.   </span><br> <!-- <span class="text-orange">
                                        Tour Simanof Italy 2021!
                                    </span> -->
                                </p>
                            </div>

                                    <div class="text-center">
                                <a class="btn btn-primary btn-xl" href="{{ route('profile') }}" role="button">Enviar audición</a>

                            </div>
                            @endguest





                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var url_video = "https://www.youtube.com/embed/nPti7JCjpw4?autoplay=1&amp;feature=oembed";
    function activeVideo() {
        var video = document.getElementById("video-tour");
        var contenedor = document.getElementById("contenedor-multimedia");
        contenedor.style.display = "block"
        video.src = url_video;
        var contenedor_thumbl = document.getElementById("contenedor-thumbl");
        contenedor_thumbl.style.display = "none";

        //https://www.youtube.com/embed/EtZ7rngJU_s?autoplay=1&controls=0&loop=1&rel=0&showinfo=0&modestbranding=1

    }
</script>
@endsection
