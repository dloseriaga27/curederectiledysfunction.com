<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faqs;

class FaqsController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/faqs');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $faqs = new Faqs;
        $faqs->f_title = $request->input('title');
        $faqs->f_desc = $request->input('longDesc');
        $faqs->f_orders = $request->input('order');
        $faqs->f_status = $request->input('status');
         
        $faqs->save();

        return redirect('/admin/faqs')->with('flash_message', 'Faqs Added!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
       $faqs = Faqs::orderBy("f_orders", "asc")->get();
       return view('/faqs')->with('faqs', $faqs);
    }


      public function adminstore()
    {
       $faqs = Faqs::orderBy("f_orders", "asc")->get();
       return view('/admin/faqs')->with('faqs', $faqs);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $faqs = Faqs::find($id);
       return view('/admin/faqs')->with('faqs', $faqs);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $faqs = Faqs::find($id);;
        $faqs->f_title = $request->input('title');
        $faqs->f_desc = $request->input('longDesc');
        $faqs->f_orders= $request->input('order');
        $faqs->f_status = $request->input('status');

        $faqs->save();

        return redirect('/admin/faqs')->with('flash_message', 'Faqs Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $faqs = Faqs::find($id);
        
        $faqs->delete();
        return redirect('/admin/faqs')->with('flash_message', 'FAQs Deleted!');
    }
}
