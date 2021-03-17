<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                 <div class="card d-block  shadow  border-0 bg-white rounded  mx-auto mt-5">
                    <div class="card-body">
                        <h6 class="border-bottom  pb-2 mb-0">
                            Ultimas Noticias
                        </h6>
                        <div class="media text-muted pt-3">
                             <img src="/assets/logo.png" alt="" class="bd-placeholder-img mr-2 rounded" width="32" height="32"  aria-label="Placeholder: 32x32">
                      
                            <p class="media-body pb-3 pr-1 mr-1 mb-0  lh-125 border-bottom border-gray">
                                Ya puedes ver y descargar las partituras y
                                prepararte para tu audición. También tienes toda
                                la información necesaria, para cumplir con los
                                requisitos y estar listo para el 2 de agosto día
                                que se activara el modulo de recepción de
                                audiciones y se desactivara hasta el 31 de
                                agosto.
                            </p>

                            <a > <span class="text-orange">27-07-2020</span> </a>
                        </div>
                        <div class="media text-muted pt-3">
                             <img src="/assets/logo.png" alt="" class="bd-placeholder-img mr-2 rounded" width="32" height="32"  aria-label="Placeholder: 32x32">
                      
                            <p class="media-body pb-3 mb-0  lh-125 border-bottom border-gray">
                                Comienza el proceso de pre-inscripción a través
                                de la red electrónica. Crear tu cuenta es el
                                primer paso para poder ser aspirante al Tour
                                Simanof Italia 2021
                            </p>
                            <a ><span class="text-orange">19-07-2020</span> </a>
                        </div>

                        <br />
                        <h6 class="border-bottom  pb-2 mb-0">
                            Sugerencias y Tips
                        </h6>

                        <div class="media text-muted pt-3">

                            <img src="/assets/logo.png" alt="" class="bd-placeholder-img mr-2 rounded" width="32" height="32"  aria-label="Placeholder: 32x32">
                      
                            <p class="media-body pb-3 mb-0  lh-125 border-bottom border-gray">
                                Hey!!! estate atento es posible que existan cambios
                                por situaciones externas a simanof. Así que
                                verifica que tus datos de contacto sean los
                                correctos para que por ese medio nos
                                comuniquemos.
                            </p>
                        </div>
                        <div class="media text-muted pt-3">
                            <img src="/assets/logo.png" alt="" class="bd-placeholder-img mr-2 rounded" width="32" height="32"  aria-label="Placeholder: 32x32">
                      
                            <p class="media-body pb-3 mb-0  lh-125 border-bottom border-gray">
                                Gracias por tener la iniciativa de formar parte de esta
                                experiencia musical Tour Simanof 2021, nuestro objetivo es llevar la
                                musica a todas partes a través de nuestra
                                orquesta sinfónica, fomentar la educación y
                                cultura musical en cada familia de cualquier
                                parte del mundo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card d-block  shadow  border-0 bg-white rounded  mx-auto mt-5">
                    <div class="card-body">
                       <a class="btn btn-primary btn-lg-purple text-left btn-block mb-3 "  role="button" href="/tour">  
<span class="pull-left">Fechas </span>
                         </a>
                         
                          <a class="btn btn-primary btn-lg-purple text-left btn-block mb-3 "  role="button" href="/audition">  
<span class="pull-left">Audiciones (Proceso, Requisitos, Partituras) </span>
                         </a>
                          <a class="btn btn-primary btn-lg-purple text-left btn-block mb-3 "  role="button" href="/profile">  
<span class="pull-left">Enviar audición (Ya disponible costo $30.00 USD )</span>
                         </a>
                          <a class="btn btn-primary btn-lg-purple text-left btn-block mb-3 disabled"  role="button" href="#">  
<span class="pull-left">Campamentos </span>
                         </a>
                          <a class="btn btn-primary btn-lg-purple text-left btn-block mb-3 disabled"  role="button" href="#">  
<span class="pull-left">Locaciones (Hoteles, Auditorios, Escenarios y Sitios) </span>
                         </a>

                           <a class="btn btn-primary btn-lg-purple text-left btn-block mb-3 disabled "  role="button" href="#">  
<span class="pull-left">Costos </span>
                         </a>
                          <a class="btn btn-light  btn-lg btn-block mb-3  "  role="button" href="/profile" >  
<span class="pull-left text-orange text-regular-medinum ">Completa tu Perfil </span>
                         </a>

                          <a class="btn btn-light  btn-lg btn-block mb-3  "  role="button" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  
<span class="pull-left text-carbon text-regular-medinum">Cerrar Sesión </span>
                         </a>
                    </div>
                </div>
                 <form id="logout-form" action="/logout" method="POST"                                 style="display: none;">
                                    @csrf
                                </form>

                 <div class="card d-block  shadow  border-0 bg-white rounded  mx-auto mt-5">
                    <div class="card-body">
                       <div class="row">
                           <div class="col-md-6">
                                 <div class="text-title text-carbon text-center">

            
                     Ponte en contacto con nosotros vía

                     <a href="https://api.whatsapp.com/message/2JNYXR42ZJASK1" target="_blank" rel="noopener noreferrer"> Whatsapp</a>
                     <br>
                                    <a href="https://api.whatsapp.com/send?phone=5219611198051" target="_blank" rel="noopener noreferrer">+52 1 9611198051</a>
                <br>
                        
                        
           
                    </div>
                           </div>
                           <div class="col md-6">
                                <img src="/assets/wa.svg" width="100%" alt="">
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log("Component mounted.");
        }
    };
</script>