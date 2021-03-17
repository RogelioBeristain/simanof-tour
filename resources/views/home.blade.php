@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

             <div class="text-title text-carbon text-center">

            <br>
                   <!--  Hi {{ Auth::user()->first_name}}
            
                <br>  -->
                        
                        Welcome to   <span class="text-orange">Tour Simanof</span>  Account!
                      
                
           
                    </div>

           

                   

                    <dash-child-component></dash-child-component>
            
        </div>
    </div>
</div>
@endsection
