<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\tbl_user;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Backend.tbl_user.insert");
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
            'nbrId_user' => 'required|min:1|max:11',
            'txtName' => 'required|min:5|max:50',
            'txtPwd_user' => 'required|min:5|max:20',
            'nbrPhone' => 'required|max:11',
            'txtEmail' => 'required|max:90'
        ]);
        $store = new tbl_user;
        $store->id = $request->nbrId_user;
        $store->name = $request->txtName;
        $store->password = Hash::make($request->txtPwd_user);
        $store->phone_number = $request->nbrPhone;
        $store->email = $request->txtEmail;
        $store->save();
        return redirect("backend/user-table")->with('success_user', "Insert data successfully");
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
        $edit = tbl_user::find($id);
        return view("Backend.tbl_user.update")->with('edit_user', $edit);
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
            'nbrId_user' => 'required|min:1|max:11',
            'txtName' => 'required|min:5|max:50',
            'txtPwd_user' => 'required|min:5|max:20',
            'nbrPhone' => 'required|max:11',
            'txtEmail' => 'required|max:90|regex:/^[A-Za-z0-9]+\@[A-Za-z]{2,5}\.[A-Za-z]{2,5}(\.[A-Za-z]{2,5})?$/'
        ]);
        $update = tbl_user::find($id);
        $update->id = $request->nbrId_user;
        $update->name = $request->txtName;
        $update->password = Hash::make($request->txtPwd_user);
        $update->phone_number = $request->nbrPhone;
        $update->email = $request->txtEmail;
        $update->save();
        return redirect("backend/user-table")->with('success_user',"Edit data successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = tbl_user::find($id);
        $destroy->delete();
        return redirect('backend/user-table')->with('success_user', "Delete data successfully");
    }
}
