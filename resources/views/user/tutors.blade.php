@extends('layouts.app')

@section('content')
  <meta name="robots" content="noindex">
  <meta name="robots" content="nocache">
  <meta name="robots" content="noarchive">
<meta name="googlebot" content="noindex">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

             <div class="text-title text-carbon text-center">

            <br>
                   
                        
                        <span class="text-orange">Lista de tutores</span> 
                      
                
           
                    </div>

           

                   

                    <list-tutors-component> </list-tutors-component>
            
        </div>
    </div>
</div>
@endsection
