<?php



namespace App\Http\Controllers;



use App\Http\Controllers\Controller;
use App\Models\PackageDestinationDetails;
use App\Models\PakageDestination;
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


   // public function destination_plane()

   // {

   //    return view('frontend.services.destination_plane');
   // }
   public function destination_plane(Request $request)
   {
      $id = $request->input('id');
      $tours = PakageDestination::with('destination')->where('destination_id', $id)->latest()->paginate(9); // Use paginate for pagination
      return view('frontend.services.destination_plane', compact('tours'));
   }

   // public function single_destination()
   // {
   //    return view('frontend.services.single_destination');
   // }
   public function single_destination(Request $request)
   {
      $id = $request->input('id');
      $destination = PackageDestinationDetails::findOrFail($id);

      return view('frontend.services.single_destination', compact('destination'));
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
