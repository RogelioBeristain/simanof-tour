@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

      <div class="row text-center pt-5">

             <div class="col-md-12">
                <h3 class="text-regular-orange text-carbon">
                     <span class="text-header-title">
                            Log In to Your 
                     </span>  <br>
                     Tour Simanof  <span class="text-orange">  <br> Account!</span>
                    
                    
                    
                </h3>

            </div>
        </div>
        <div class="col-md-6">
            <div class="card d-block  shadow  border-0 bg-white rounded  mx-auto mt-5">
               

                <div class="card-body pt-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row justify-content-center ">
                           <!--  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
 -->
                            <div class="col-md-8">
                                <input id="email" type="email" placeholder="{{ __('Email') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center ">
                          <!--   <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
 -->
                            <div class="col-md-8">
                                <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       <!--  <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                          <div class="form-group row  justify-content-center  mb-0">
                          <!--   <div class="col-md-8 offset-md-4"> -->
                               <div class="col-md-8" >

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row justify-content-center  mb-0">
                          <!--   <div class="col-md-8 offset-md-4"> -->
                                 <div class="col-md-8" >
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
