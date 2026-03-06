<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\tbl_admin;
use App\Model\tbl_user;
use Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index_admin = tbl_admin::all();
        $index_user = tbl_user::all();
        return view("Backend.admin-views.usertable", compact('index_admin', 'index_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Backend.tbl_admin.insert");
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
            'nbrId' =>'required|min:1|max:11',
            'txtPermission' => 'required|min:1|max:20|',
            'txtUserName' => 'required|min:5|max:90',
            'txtPwd' => 'required|min:5|max:20'

        ]);
        $store = new tbl_admin;
        $store->id = $request->nbrId;
        $store->permission = $request->txtPermission;
        $store->user_name = $request->txtUserName;
        $store->password = Hash::make($request->txtPwd);
        $store->save();
        return redirect("backend/user-table")->with('success', "Insert data successfully");
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
        $edit = tbl_admin::find($id);
        return view("Backend.tbl_admin.update", compact('edit'));
        //admin
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
            'nbrId' =>'required|min:1|max:11',
            'txtPermission' => 'required|min:1|max:20|',
            'txtUserName' => 'required|min:5|max:90',
            'txtPwd' => 'required|min:5|max:20'

        ]);
        $update = tbl_admin::find($id);
        $update->id = $request->nbrId;
        $update->permission = $request->txtPermission;
        $update->user_name = $request->txtUserName;
        $update->password = Hash::make($request->txtPwd);
        $update->save();
        return redirect("backend/user-table")->with('success', "Update data successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = tbl_admin::find($id);
        $destroy->delete();
        return redirect("backend/user-table")->with('success', "Delete data successfully");
    }
}
