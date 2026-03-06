<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\tbl_delivery;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index_delivery = tbl_delivery::all()->sortDesc();
        return view("Backend.admin-views.delivery_order", compact('index_delivery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Backend.tbl_delivery.insert");
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
            'nbrCusId' => 'required|min:1|max:11',
            'nbrPhone' => 'required|min:1|max:11',
            'txtStoreName' => 'required|min:5|max:90',
            'txtCusAddress' => 'required|min:5|max:200',
            'txtOrCode' => 'required|min:1|max:50',
        ]);
        $store = new tbl_delivery;
        $store->id = $request->nbrId;
        $store->customer_id = $request->nbrCusId;
        $store->phone_numbers = $request->nbrPhone;
        $store->store_name = $request->txtStoreName;
        $store->customer_address = $request->txtCusAddress;
        $store->order_code = $request->txtOrCode;
        $store->save();
        return redirect("backend/menu-table")->with('success_delivery', "Insert data successfully");

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
        $edit = tbl_delivery::find($id);
        return view("Backend.tbl_delivery.update")->with('edit_delivery', $edit);
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
            'nbrCusId' => 'required|min:1|max:11',
            'nbrPhone' => 'required|min:1|max:11',
            'txtStoreName' => 'required|min:5|max:90',
            'txtCusAddress' => 'required|min:5|max:200',
            'txtOrCode' => 'required|min:1|max:50',
        ]);
        $update = tbl_delivery::find($id);
        $update->id = $request->nbrId;
        $update->customer_id = $request->nbrCusId;
        $update->phone_numbers = $request->nbrPhone;
        $update->store_name = $request->txtStoreName;
        $update->customer_address = $request->txtCusAddress;
        $update->order_code = $request->txtOrCode;
        $update->save();
        return redirect("backend/menu-table")->with('success_delivery', "Edit data successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = tbl_delivery::find($id);
        $destroy->delete();
        return redirect("backend/menu-table")->with('success_delivery', "Delete data successfully");
    }
}
