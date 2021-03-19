@extends('layouts.app')

@section('content')
    <meta name="robots" content="noindex">
    <meta name="robots" content="nocache">
    <meta name="robots" content="noarchive">
    <meta name="googlebot" content="noindex">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="text-title text-carbon text-regular text-center">
                    <br>
                    Hola <span class="text-orange">{{$user->first_name}}</span>
                </div>
                <div class=" text-regular-medinum text-carbon text-regular text-center">
                    completa tu perfil o actúalizalo
                </div>
                <div class=" text-regular-medinum text-carbon text-regular text-center">
                    para estar siempre en contacto contigo.
                </div>
                <profile-user-component> </profile-user-component>
            </div>
        </div>
    </div>
@endsection
