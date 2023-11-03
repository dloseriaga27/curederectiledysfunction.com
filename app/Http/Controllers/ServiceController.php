<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
     private $username='public'.'/';
   private $uploadDir='services/';  
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('/admin/services');
    }

    public function getservices()
    {
       $services = Services::where('s_status','Active')->orderBy("created_at", "asc")->get();
       return view('/services')->with('services', $services);
    }
     public function gethomeservices()
    {
       $services = Services::where('s_status','Active')->orderBy("created_at", "asc")->get();
       return view('/welcome')->with('services', $services);
    }

    public function getadminservices()
    {
       $services = Services::orderBy("s_title", "asc")->get();
       return view('/admin/services')->with('services', $services);
    }
     public function save(Request $request)
    {

      
       if ($request->hasFile('thumbnail')) {

         $file = $request->file('thumbnail');
         $destinationPath = $this->username.$this->uploadDir;
         $originalFile = $file->getClientOriginalName();
         $file->move($destinationPath, $originalFile);

         $services = new Services;
         $services->s_path = $destinationPath.$file->getClientOriginalName() ;
         $services->s_title = $request->input('title');
         $services->s_shortDesc = $request->input('shortDesc');
         $services->s_longDesc = $request->input('longDesc');
         $services->s_pricing = $request->input('pricing');
         $services->s_status = $request->input('status');
         
         $services->save();

       }
      return redirect('/admin/services')->with('flash_message', 'Services Added!');

       

       // return redirect('/services');
    }
     public function show($id)
    {
       $services = Services::find($id);
       return view('/admin/services')->with('services', $services);
    }

    public function update(Request $request, $id)
    {
   
         $services = Services::find($id);;
         $services->s_title = $request->input('title');
         $services->s_shortDesc = $request->input('shortDesc');
         $services->s_longDesc = $request->input('longDesc');
         $services->s_pricing = $request->input('pricing');
         $services->s_status = $request->input('status');

        if ($request->hasFile('thumbnail')) {

         $file = $request->file('thumbnail');
         $destinationPath = $this->username.$this->uploadDir;
         $originalFile = $file->getClientOriginalName();

         $destination = $destinationPath.$services->s_path;
         if (File::exists($destination)) {
            File::delete($destination);
         }
         
         $file->move($destinationPath, $originalFile);
         $services->s_path = $destinationPath.$file->getClientOriginalName() ;

         }

      
      
      $services->save();

      return redirect('/admin/services')->with('flash_message', 'Services Added!');

       

       // return redirect('/services');
    }
      public function delete(Request $request, $id)
    {
       $services = Services::find($id);
       $destination = $request->input('thumbnail');
         if (File::exists($destination)) {
            File::delete($destination);
         }

       $services->delete();
       return redirect('/admin/services')->with('flash_message', 'Services Deleted!');
    }
}
