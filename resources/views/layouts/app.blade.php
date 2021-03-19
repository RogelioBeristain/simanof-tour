<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config("app.name", "Laravel") }}</title>
    <link rel="manifest" href="{{ asset('/dunplab-manifest-7628.json') }}">

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57-dunplab-manifest-7628.png.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60-dunplab-manifest-7628.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72-dunplab-manifest-7628.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76-dunplab-manifest-7628.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114-dunplab-manifest-7628.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120-dunplab-manifest-7628.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144-dunplab-manifest-7628.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152-dunplab-manifest-7628.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180-dunplab-manifest-7628.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192-dunplab-manifest-7628.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32-dunplab-manifest-7628.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96-dunplab-manifest-7628.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16-dunplab-manifest-7628.png">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
@if (env('APP_ENV') == 'production')

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-172915930-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-172915930-1');
</script>


@endif


</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md fixed-top navbar-light well  shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="child-nav-logo  " src="{{ asset('assets/child_1.png') }}" alt="" />
                   
                        <div class="text-logo">Siman</div> <div class="text-logo-2"> Orchestral </div> <div class="text-logo"> Foundation</div>  
                  
                  
                
            
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        
                       
                     


                    </ul>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest

                        <li class="nav-item">

                        

                             <a class="nav-link" href="{{ route('audition') }}">
                            <!-- <li class="nav-item active"> -->
                                <!-- <li> -->
                                 <img class="child-nav" src="{{ asset('assets/child_2.png') }}" alt="" />
                                Audition

                                
                               <!--  <span class="sr-only">(current)</span> -->
                        </a>
                        </li>
                        <li class="nav-item" >

                        

                             <a class="nav-link" href="{{ route('tour') }}">
                            <!-- <li class="nav-item active"> -->
                                <!-- <li> -->
                                 <img class="child-nav" src="{{ asset('assets/child_4.png') }}" alt="" />
                                Tour

                                
                               <!--  <span class="sr-only">(current)</span> -->
                        </a>
                        </li>
                         <li class="nav-item">

                            <a class="nav-link" href="{{ route('camp') }}">
                                <img class="child-nav" src="{{ asset('assets/child_3.png') }}" alt="" />Camp
                                <img class="child-nav" src="{{ asset('assets/child_2.png') }}" alt="" />

                            </a>
                        </li> 
                
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('login') }}">{{ __("login") }}</a>
                            
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __("Sign up") }}</a>
                        </li>
                        @endif 
                        
                        @else
                         <li class="nav-item">

                             <a class="nav-link" href="{{ route('audition') }}">
                            <!-- <li class="nav-item active"> -->
                                <!-- <li> -->
                                 <img class="child-nav" src="{{ asset('assets/child_2.png') }}" alt="" />
                               Audition
                               <!--  <span class="sr-only">(current)</span> -->
                            </a>
                        </li>
                         <li class="nav-item">

                             <a class="nav-link" href="{{ route('tour') }}">
                            <!-- <li class="nav-item active"> -->
                                <!-- <li> -->
                                 <img class="child-nav" src="{{ asset('assets/child_4.png') }}" alt="" />
                                Tour
                               <!--  <span class="sr-only">(current)</span> -->
                            </a>
                        </li>
                         <li class="nav-item">

                            <a class="nav-link" href="{{ route('camp') }}">
                                <img class="child-nav" src="{{ asset('assets/child_3.png') }}" alt="" />Camp
                            

                            </a>
                        </li> 
                          <li class="nav-item">
                            <a class="nav-link " href="{{ route('home') }}">Home</a>
                            
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link " href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                 <img class="child-nav" src="{{ asset('assets/user.svg') }}" alt="" />

                               <!--  {{ __("Profile") }} -->
                               <!--  <span class="caret"></span> -->
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __("Logout") }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> 

        <main class="py-4">
            @yield('content')
        </main>
        <hr class="my-auto flex-grow-1">
          <footer>
 
  <p class="font-size-sm text-center mb-4 py-3"><span class=" opacity-50 mr-1">© 2021 <a class="nav-link-style text-orange nav-link-light" href="http://simanof.com/" target="_blank" rel="noopener">SIMAN ORCHESTRAL FOUNDATION.</a> All Rights Reserved. </span></p>
    
        </footer>

        
    </div>


</body>

</html>