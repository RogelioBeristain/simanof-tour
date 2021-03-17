<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
      public function tour()
    {
        return view('tour');
    }


     public function camp()
    {
        return view('camp');
    }

      public function audition()
    {
        return view('audition');
    }

      public function welcome()
    {
        return view('welcome');
    }

        public function vistaPreviaPartitura($title){

         return view('audition.partitura', compact('title') );
        
    }

     public function vistaPreviaDocument($title){

         return view('audition.document', compact('title') );
        
    }
}
