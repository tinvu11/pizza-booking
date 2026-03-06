<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\tbl_order_details;

class OrderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index_order_details = tbl_order_details::all()->sortDesc();
        return view("Backend.admin-views.order_detail", compact('index_order_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Backend.tbl_order_details.insert");
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
            'txtDishId' => 'required|min:1|max:50',
            'nbrQuantity' => 'required|min:1|max:11',
            'nbrPrice' => 'required',
            'txtOrCode' => 'required|min:1|max:50'
        ]);
        $store = new tbl_order_details;
        $store->id = $request->nbrId;
        $store->dish_id = $request->txtDishId;
        $store->quantity = $request->nbrQuantity;
        $store->price = $request->nbrPrice;
        $store->order_code = $request->txtOrCode;
        $store->save();
        return redirect("backend/menu-table")->with('success_order_details', "Insert data successfully");
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
        $edit = tbl_order_details::find($id);
        return view("Backend.tbl_order_details.update")->with('edit_order_details', $edit);
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
            'txtDishId' => 'required|min:1|max:50',
            'nbrQuantity' => 'required|min:1|max:11',
            'nbrPrice' => 'required',
            'txtOrCode' => 'required|min:1|max:50'
        ]);
        $update = tbl_order_details::find($id);
        $update->id = $request->nbrId;
        $update->dish_id = $request->txtDishId;
        $update->quantity = $request->nbrQuantity;
        $update->price = $request->nbrPrice;
        $update->order_code = $request->txtOrCode;
        $update->save();
        return redirect("backend/menu-table")->with('success_order_details', "Edit data successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = tbl_order_details::find($id);
        $destroy->delete();
        return redirect("backend/menu-table")->with('success_order_details', "Delete data successfully");
    }
}
