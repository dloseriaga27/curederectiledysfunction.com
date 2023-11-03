<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\SendMail;

class MailController extends Controller
{
    public function sendMail(){
        
        $data = [
            'name' => 'Dan',
            'email' => 'danielloseriaga.developer530@gmail.com',
            'phone' => '09277347205',
            'message' => 'Message',
          ];

    
        Mail::to('danielloseriaga.developer530@gmail.com')->send(new SendMail($data));

        return view('welcome');
    }
}
