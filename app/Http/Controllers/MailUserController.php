<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Mail;

use App\Mail\SimpleEmail;
use Illuminate\Http\Request;

class MailUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendAll(Request $request){

        $users= User::all()-> filter(function($user, $key){
            return $user->email[0] == 'r'; 
        });

        $message_default_in_html="Hola este domingo 2 de agosto se activa la recepción de audiciones. <br /> Envía tu audición <br />a través de nuestra pagina web.<br /> <span style='text-decoration: underline;'> <span style='color: #198fc7; text-decoration: underline;'>tour.simanof.com</span></span>";

        foreach ($users as $key => $user) {
            $text_html="";
            $url_picture="http://www.tour.simanof.com/assets/mail/logo.jpg"; 
            
            
            $mensaje = array(
                'email'=>$user->email,
                'user'=>$user,
                'url_picture'=>$url_picture,
                'subject'=>'Tour Simanof - Notification',
                'bodyMessage'=> $text_html,
                'bodyMessage2'=> "",
                'a_file'=> []
            );



             //Mail::to("rogelio26.dev@gmail.com")->send(new SimpleEmail($mensaje));
            $emailAdress= $user->email;
            Mail::to($emailAdress)->send(new SimpleEmail($mensaje)); 
        }
        
        return $users;

    }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
