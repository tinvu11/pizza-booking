<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\tbl_product;

class ProductController extends Controller
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
        return view("Backend.tbl_product.insert");
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
            'nbrCatId' => 'required|min:1|max:11',
            'txtDishName' => 'required|min:1|max:90',
            'nbrPrice' => 'required',
            'nbrInven' => 'required',
            'txtCusReview' => 'required|min:1|max:90'
        ]);
        $store = new tbl_product;
        $store->cat_id = $request->nbrCatId;
        $store->menu = $request->txtMenu;
        // Upload Image
        $getName      = $request->file('txtPrdImg')->getClientOriginalName();
        $new_name     = time()."_".rand()."_".$getName;
        $request->file('txtPrdImg')->move(public_path('product'), $new_name);
        $store->prd_img = $new_name;
        // end Upload Image
        $store->dish_name = $request->txtDishName;
        $store->price = $request->nbrPrice;
        $store->inventory = $request->nbrInven;
        $store->customer_reviews = $request->txtCusReview;
        $store->save();
        return redirect('backend/menu-table')->with('success_product', "Insert data successfully");
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
        $edit = tbl_product::find($id);
        return view("Backend.tbl_product.update")->with('edit_product', $edit);
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
            'nbrCatId' => 'required|min:1|max:11',
            'txtPrdImg' => 'required|max:4096|mimes:jpeg,jpg,svd,png,gif|image',
            'txtDishName' => 'required|min:1|max:90',
            'nbrPrice' => 'required',
            'nbrInven' => 'required',
            'txtCusReview' => 'required|min:1|max:90'
        ]);
        $update = tbl_product::find($id);
        $update->cat_id = $request->nbrCatId;
        $update->menu = $request->txtMenu;
        // Upload Image
        $getName      = $request->file('txtPrdImg')->getClientOriginalName();
        $new_name     = time()."_".rand()."_".$getName;
        $request->file('txtPrdImg')->move(public_path('product'), $new_name);
        $update->prd_img = $new_name;
        // end Upload Image
        $update->dish_name = $request->txtDishName;
        $update->price = $request->nbrPrice;
        $update->inventory = $request->nbrInven;
        $update->customer_reviews = $request->txtCusReview;
        $update->save();
        return redirect('backend/menu-table')->with('success_product', "Edit data successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = tbl_product::find($id);
        $destroy->delete();
        return redirect("backend/menu-table")->with('success_product', "Delete data successfully");
    }
    public function getProductPizza(){
        $menuPizza = tbl_product::where('menu', 'pizza')->get();
        $menuPreminum = tbl_product::where('menu', 'preminum')->get();
        return view('Frontend.pizza', compact('menuPizza', 'menuPreminum'));
    }
    public function getProductBread(){
        // $menuBread = tbl_product::where('menu', 'garlic breads')->paginate(3);
        $menuBread = tbl_product::where('menu', 'garlic breads')->get();

        return view('Frontend.galicbreads', compact('menuBread'));
    }
    public function getProductDessert(){
        $menuDessert = tbl_product::where('menu', 'desserts')->get();
        return view('Frontend.dessert', compact('menuDessert'));
    }
    public function getProductBeverage(){
        $menuBeverage = tbl_product::where('menu', 'beverages')->get();
        return view('Frontend.beverages', compact('menuBeverage'));
    }
    public function getProductSandwiches(){
        $menuSandwiches = tbl_product::where('menu', 'pizza sandwiches')->get();
        return view('Frontend.pizzasandwiches', compact('menuSandwiches'));
    }
    
}
