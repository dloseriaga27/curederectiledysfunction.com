<?php

namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Mail\SendMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('/contact');
    }

      public function create(Request $request)
    {

        $contacts = new Contact;
        $contacts->c_name = $request->input('name');
        $contacts->c_phone = $request->input('phone');
        $contacts->c_email = $request->input('email');
        $contacts->c_message = $request->input('message');
         
        $contacts->save();
        
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
          ];

    
        Mail::to('danielloseriaga.developer530@gmail.com')->send(new SendMail($data));

        return redirect('/contact')->with('message', 'Thank you! Your submission has been received!');
    }

    public function getservices()
    {
       $contacts = Contact::orderBy("created_at", "asc")->get();
       return view('/contact')->with('contacts', $contacts);
    }
     public function getadminservices()
    {
       $contacts =Contact::orderBy("created_at", "asc")->get();
       return view('/admin/contact')->with('contacts', $contacts);
    }
    
     public function show($id)
    {
       $contacts = Contact::find($id);
       return view('/contact')->with('contacts', $contacts);
    }

   
      public function delete(Request $request, $id)
    {
       $contacts = Contact::find($id);

       $contacts->delete();
       return redirect('/admin/contact')->with('flash_message', 'Services Deleted!');
    }
}
