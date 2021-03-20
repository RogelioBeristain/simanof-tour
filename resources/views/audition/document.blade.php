@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="text-title text-carbon text-center">

                    <br>


                    Descarga el PDF <span class="text-orange">Tour Simanof</span>

                    <br>
                    <span> <a href="/audiciones/{{ $title }}" target="_blank" rel="noopener noreferrer">Click aquí
                            para descargar el documento </a>
                    </span>

                </div>







                <div id="container-pdf">
                    <object id="obj" type="application/pdf" data="/audiciones/{{ $title }}">

                        <embed src="/audiciones/{{ $title }}" type="application/pdf" />
                    </object>
                </div>



            </div>
        </div>
    </div>
@endsection
