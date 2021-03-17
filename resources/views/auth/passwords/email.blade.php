@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card  shadow  border-0 bg-white rounded  mx-auto mt-5">
              
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                          <!--   <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
 -->                        
                        <div class=" mt-3 ">
                            <img  class="picture-secundary "src="{{asset('assets/icon_sc.svg') }}" alt="">

</div>
                            <div class="text-center">
                                <div> Trouble Logging In? </div>
                                <p class="text-light-medinum ">
  Enter your email and we'll send you a link to get back into your account.

                                </p>
                               
                            </div>
                            <div class="col-md-10">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 text-center justify-content-center">
                            <div class="col-md-10 ">
                                <button type="submit" class="btn btn-primary btn-xl-purple-radius">
                                    {{ __('Send login link') }}
                                </button>

                                
                            </div>
                           
                            <div class="col-md-10 ">
                            <br>
                           <div class="separator">OR</div>

                            </div>
                             <div class="col-md-10 ">
                            
                                <a  class="text-orange" href="{{ route('register') }}"> Create New Account</a>
                            </div>
                             <div class="col-md-10 ">
                            
                                <a  class="text-blue" href="{{ route('login') }}"> Back to login</a>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
