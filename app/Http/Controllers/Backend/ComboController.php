<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\tbl_combo; 

class ComboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index_combo = tbl_combo::orderBy('id', 'desc')->paginate(4);
        return view("Backend.admin-views.weekendspecial", compact('index_combo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.tbl_combo.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $store              = new tbl_combo;
        //Begin: UploadImage
        $getName            = $request->file('txtComboImg')->getClientOriginalName();
        $new_name           = time()."_".rand()."_".$getName;
        $request->file('txtComboImg')->move(public_path('combo'), $new_name);
        $store->combo_img   = $new_name;
        //End: UploadImage
        $store->description = $request->txtDescription;
        $store->price       = $request->txtPrice;
        $store->status      = $request->txtStatus;
        $store->save();
        return redirect("backend/weekend-special")->with('success_combo', "Insert data successfully");
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
        $edit_combo = tbl_combo::find($id);
        return view("Backend.tbl_combo.update", compact('edit_combo',));
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
        $update             = tbl_combo::find($id);
        $update->id         = $request->txtId;
        //Begin: UploadImage
        $getName            = $request->file('txtComboImg')->getClientOriginalName();
        $new_name           = time()."_".rand()."_".$getName;
        $request->file('txtComboImg')->move(public_path('combo'), $new_name);
        $update->combo_img   = $new_name;
        //End: UploadImage
        $update->description = $request->txtDescription;
        $update->price       = $request->txtPrice;
        $update->status      = $request->txtStatus;
        $update->save();
        return redirect("backend/weekend-special")->with('success_combo', "Edit data successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = tbl_combo::find($id);
        $destroy->delete();
        return redirect("backend/weekend-special")->with('success_combo', 'Delete data successfully');
    }
}
