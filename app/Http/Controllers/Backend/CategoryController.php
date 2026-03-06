<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\tbl_category;
use App\Model\tbl_product;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index_category = tbl_category::all();
        $index_product = tbl_product::all()->sortDesc();
        return view("Backend.admin-views.menutable", compact('index_category', 'index_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Backend.tbl_category.insert");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nbrId' => 'required|min:1|max:11',
            'txtCatName' => 'required|min:1|max:90',
            'txtCatImage' => 'required|max:4096',
            'txtDes' => 'required|min:1|max:90'
        ]);
        $store = new tbl_category;
        $store->id = $request->nbrId;
        $store->cat_name = $request->txtCatName;
        // Upload Image
        $getName      = $request->file('txtCatImage')->getClientOriginalName();
        $new_name     = time()."_".$getName;
        $request->file('txtCatImage')->move(public_path('category'), $new_name);
        $store->cat_image = $new_name;
        // end Upload Image
        $store->cat_description = $request->txtDes;
        $store->save();
        return redirect('backend/menu-table')->with('success_category', "Insert data successfully");
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
        $edit = tbl_category::find($id);
        return view("Backend.tbl_category.update", compact('edit'));
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
        $request->validate([
            'nbrId' => 'required|min:1|max:11',
            'txtCatName' => 'required|min:1|max:90',
            'txtCatImage' => 'required|image|mimes:jpeg,png,jpg,svd,gif|max:4096',
            'txtDes' => 'required|min:1|max:90'
        ]);
        $update = tbl_category::find($id);
        $update->id = $request->nbrId;
        $update->cat_name = $request->txtCatName;
        // Upload File
        $getName      = $request->file('txtCatImage')->getClientOriginalName();
        $new_name     = time()."_".$getName;
        $request->file('txtCatImage')->move(public_path('category'), $new_name);
        $update->cat_image = $new_name;
        //end Upload File
        $update->cat_description = $request->txtDes;
        $update->save();
        return redirect('backend/menu-table')->with('success_category', "Edit data successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = tbl_category::find($id);
        $destroy->delete();
        return redirect('backend/menu-table')->with('success_category', "Delete data successfully");
    }
}
//I:\XAMPP\htdocs\Laravel\public\category\1587878088_samsung.png