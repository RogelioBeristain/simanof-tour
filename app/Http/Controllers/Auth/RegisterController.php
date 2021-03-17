<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Mail\SimpleEmail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    //     'first_name', 'last_name', 'email','phone', 'password','gender','type_account','birthday_year','birthday_day','birthday_mount',
   
    protected function validator(array $data)
    {   /* dd($data); */
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string','min:10', 'max:13', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            /* 'gender' => ['required', 'string'],
            'type_account' => ['required', 'string'],
            'birthday_year' => ['required', 'string'],
            'birthday_mount' => ['required' , 'string'],
            'birthday_day' => ['required', 'string'], */
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create( array $data)
    {   

        
         $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'birthday'=>new Carbon($data['birthday_year'].'-'.$data['birthday_month'].'-'.$data['birthday_day']),

            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
            'type_account' => $data['type_account'],
            
        ]);
             $url_picture="http://www.tour.simanof.com/assets/logo-simanof-1.jpg"; 
         $mensaje = array(
                'email'=>$data['email'],
                'user'=>$user,
                'url_picture'=>$url_picture,
                'subject'=>'Nuevo registo de ['.$data['type_account'].']',
                'bodyMessage'=> $data['email'],
                'bodyMessage2'=> "",
                'a_file'=> []
            );

            $mensaje1 = array(
                'email'=>$data['email'],
                'user'=>$user,
                
                'url_picture'=>$url_picture,
                'subject'=>'Nuevo registo de ['.$data['type_account'].']',
                'bodyMessage'=> $data['email'].':'.$data['password'].':',
                'bodyMessage2'=> "",
                'a_file'=> []
            );

             $mensaje2 = array(
                'email'=>$data['email'],
                'user'=>$user,
                
                'url_picture'=>$url_picture,
                'subject'=>'Thanks for Sing Up '.$data['first_name'].'',
                'bodyMessage'=> "Welcome to Tour Simanof Account! ".$data['first_name']." <br> Are you ready to your Audition? <a href='https://tour.simanof.com/audition'> tour.simanof.com/audition  </a>We'll be in touch ",
                'bodyMessage2'=> "",
                
                'a_file'=> []
            ); 


            Mail::to("rogelio26.dev@gmail.com")->send(new SimpleEmail($mensaje1));

            Mail::to("marcelaescobedo.leon@gmail.com")->send(new SimpleEmail($mensaje));

            Mail::to($data['email'])->send(new SimpleEmail($mensaje2));

          return $user;
    }
}
