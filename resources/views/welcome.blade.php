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
                                    <div class="col-md-6">
                                        <div class="">
                                            <p class="text-regular-j"> <span class="text-strong">SIMAN ORCHESTRAL
                                                    FOUNDATION</span> (SIMANOF) is a nonprofit foundation that contributes
                                                to the orchestral training of children and youth from two years old, in
                                                order to provide an opportunity to grow professionally and personally in
                                                today’s globalized world, where it is necessary to rescue the values ​​of
                                                respect, friendship and loyalty through music; always offering a high-level
                                                in music education.</p>

                                        </div>


                                    </div>
                                    <div class="col-md-6">


                                        <img class="picture-primary img-fluid "
                                            src="{{ asset('assets/susan_siman.png') }}" alt="">


                                    </div>
                                </div>
                            </div>



                            <div class="col-md-6 mt-3 ">
                                <img class="picture-secundary rounded " src="{{ asset('assets/logo-simanof-1.jpg') }}"
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

                                <div class=" text-center media-video">


                                    <div id="contenedor-multimedia"
                                        class="shadow  rounded embed-responsive  embed-responsive-4by3">
                                        <iframe class="embed-responsive-item shadow " id="video-tour" width="560"
                                            height="315"
                                            src="https://www.youtube.com/embed/nPti7JCjpw4?autoplay=0&amp;feature=oembed"
                                            frameborder="0" allowfullscreen
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>

                                    </div>


                                    <div id="contenedor-thumbl"
                                        class="  shadow  rounded embed-responsive embed-responsive-4by3">

                                        <img class="embed-responsive-item shadow img-back"
                                            src="{{ asset('assets/thumbl_video.jpg') }}" alt="">


                                        <img onclick="activeVideo()" class="embed-responsive-item  video-play img-front"
                                            src="{{ asset('assets/play.svg') }} " alt="">



                                    </div>



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
                                        <a class="btn btn-primary btn-xl" href="{{ route('register') }}" role="button">Sign
                                            Up</a>

                                    </div>
                                @else
                                    <div class="mx-auto">
                                        <p class="text-center text-title text-regular">
                                            <span class="text-blue">
                                                <a href="{{ route('profile') }}"> Ya puedes hacer tu audición </a>
                                            </span> <br>
                                            Enviar tu audición es el primer paso para ser parte de <span
                                                class="text-orange">Tour Simanof. </span><br>
                                            <!-- <span class="text-orange">
                                                Tour Simanof Italy 2021!
                                            </span> -->
                                        </p>
                                    </div>

                                    <div class="text-center">
                                        <a class="btn btn-primary btn-xl" href="{{ route('profile') }}" role="button">Enviar
                                            audición</a>

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
