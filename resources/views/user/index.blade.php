@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card d-block  shadow  border-0 bg-white rounded  mx-auto mt-5">
              
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   

                    <div class="text-title text-carbon text-center">
                        Welcome to   <span class="text-orange">Tour Simanof</span>  Account!
                        <br>

                        <span class="text-blue">
                             {{ Auth::user()->first_name}}
                        </span>
                       

                        <br>
                        We'll be in touch
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
