<?php



namespace App\Http\Controllers;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class TemplateController extends Controller

{

       public function index()

    {

       return view('frontend.home.home');

    }



     public function about()

    {

       return view('frontend.about.about');

    }



     public function destination()

    {

       return view('frontend.services.destination');

    }

    
     public function destination_plane()

    {

       return view('frontend.services.destination_plane');

    }

      public function single_destination()

    {

       return view('frontend.services.single_destination');

    }



     public function gallery()

    {

       return view('frontend.gallery.gallery');

    }



     public function contact()

    {

       return view('frontend.contact.contact');

    }

    
     public function login()

    {

       return view('frontend.backend.login');

    }

}

