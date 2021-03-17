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
                                        <p class="text-regular-j"> <span class="text-strong">SIMANOF CAMP</span> El
                                            Summer Camp está diseñado para
                                            preparar de manera intensiva todo el
                                            repertorio de la gira Internacional el
                                            cual es coordinado por Siman
                                            Orchestral Foundation, en conjunto
                                            con las delegaciones internacionales

                                            que se incorporan año con año a la gira Simanof internacional.
                                            En estos campamentos se trabaja la integración musical orquestal, y las
                                            relaciones
                                            de convivencia de nuestros alumnos quienes asistiran a la gira.
                                            Contamos también con una área de Iniciacion Musical donde se trabajan
                                            múltiples
                                            instrumentos con la finalidad de incorporar al niño a una disciplina a
                                            través de la
                                            musica, con esto buscamos reforzar valores, la disciplina, y el contacto con
                                            el éxito.</p>

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
                                                Italy 2021!
                                            </span>
                                        </div>

                                    </strong>

                                </h3>

                            </div>

                         
                            <div class="grid-gallery  pt-5">
                                <a class="grid-gallery__item" >
                                    <img class="grid-gallery__image" src="{{ asset('/img_camp/pic (1).jpg') }}">
                                </a>
                                <a class="grid-gallery__item" >
                                    <img class="grid-gallery__image" src="{{ asset('/img_camp/pic (2).jpg') }}">
                                </a>

                                 <a class="grid-gallery__item" >
                                    <img class="grid-gallery__image" src="{{ asset('/img_camp/pic (3).jpg') }}">
                                </a>

                                 <a class="grid-gallery__item" >
                                    <img class="grid-gallery__image" src="{{ asset('/img_camp/pic (4).jpg') }}">
                                </a>

                                 <a class="grid-gallery__item" >
                                    <img class="grid-gallery__image" src="{{ asset('/img_camp/pic (5).jpg') }}">
                                </a>

                                 <a class="grid-gallery__item" >
                                    <img class="grid-gallery__image" src="{{ asset('/img_camp/pic (6).jpg') }}">
                                </a>

                                 <a class="grid-gallery__item" >
                                    <img class="grid-gallery__image" src="{{ asset('/img_camp/pic (7).jpg') }}">
                                </a>

                                 <a class="grid-gallery__item" >
                                    <img class="grid-gallery__image" src="{{ asset('/img_camp/pic (8).jpg') }}">
                                </a>

                                 
                           
                            </div> 


                             @guest
                            <div class="mx-auto">
                                <p class="text-center text-title text-regular">
                                    <span class="text-blue">
                                          <a href="{{ route('register') }}"> Sign up</a>
                                    </span> to be one of the first to <br> know about the
                                    updates of the <br> <span class="text-orange">
                                        Tour Simanof Italy 2021!
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