<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\tbl_gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index_gal = tbl_gallery::orderBy('id', 'desc')->paginate(12);
        return view("Backend.admin-views.gallery", compact('index_gal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.tbl_gallery.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new tbl_gallery;
        // Upload Image
        $getName                = $request->file('txtImg')->getClientOriginalName();
        $new_name               = time()."_".rand()."_".$getName;
        $request->file('txtImg')->move(public_path('gallery'), $new_name);
        $store->img             = $new_name;
        // end Upload Image
        $store->img_description = $request->txtImgDescription;
        $store->save();
        return redirect('backend/gallery');
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
    public function destroy()
    {
        $destroy = tbl_gallery::select('id', 'img', 'img_description');
        $destroy->delete();
        return redirect('backend/gallery');
    }
}
