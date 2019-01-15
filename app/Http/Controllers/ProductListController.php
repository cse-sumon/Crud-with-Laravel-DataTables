<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use App\ProductList;
use Carbon\Carbon;


class ProductListController extends Controller
{


    public function index(){
        $product=ProductList::all();
       return json_encode(array("product_list"=>$product));

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_product_list($id)


    {

         
       // return ProductList::all();
        $product=DB::table('tbl_product_list')
                        ->where('company_userid',$id)
                        ->get();
         $product = ProductList::where('company_userid', $id)         
                ->get();
        header('Content-type: application/json');
          echo json_encode(array("product_list"=>$product));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $product_list = new ProductList;
        // $product_list->company_userid = $request->company_userid;
        // $product_list->product_name = $request->product_name;
        // $product_list->save();
        // 
        $product_list = ProductList::create($request->all());
        return response()->json($product_list);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_by_id($company_userid)
    {
        $product = ProductList::where('company_userid', $company_userid)         
                ->get();

         //echo json_encode(array("product_list"=>$product));
          return json_encode($std = array('product' => $product, ));
        //return ProductList::find($company_userid);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $product_list = ProductList::findOrFail($id);
        $product_list->update($request->all());

        return $product_list;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_list = ProductList::findOrFail($id);
        $product_list->delete();

        return 204;
    }
}
