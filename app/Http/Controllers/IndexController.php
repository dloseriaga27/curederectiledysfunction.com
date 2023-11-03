<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Services;
use App\Models\Faqs;

class IndexController extends Controller
{
    public function index()
    {
       return view('/');
    }

    public function getdata()
    {
       $services = Services::where('s_status','Active')->orderBy("created_at", "asc")->get();
       $faqs = Faqs::orderBy("f_orders", "asc")->get();

       return view('/welcome', compact('services', 'faqs'));
    }

}
