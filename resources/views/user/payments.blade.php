@extends('layouts.app')
@section('content')
    <meta name="robots" content="noindex">
    <meta name="robots" content="nocache">
    <meta name="robots" content="noarchive">
    <meta name="googlebot" content="noindex">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="text-title text-carbon text-center">
                    <br>
                    <span class="text-orange">Lista Pagos</span>
                </div>
                <list-payments-component> </list-payments-component>
            </div>
        </div>
    </div>
@endsection
