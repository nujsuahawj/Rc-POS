<?php

namespace App\Http\Controllers\API\Byjack;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class GetAllProducts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProductVariant::select('p.id','p.title','p.description','p.imageURL','product_variants.selling_price')
        ->join('products as p','product_variants.product_id','=','p.id')
        ->where('product_variants.enabled',1)
        ->get();
        if(count($data)>0){
            return response()->json(['data'=>$data]);
        }else{
            return response()->json(['message'=>'ບໍ່ມີສິນຄ້າເທື່ອ']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sanas()
    {
        $data = ProductVariant::select('p.id','p.title','p.description','p.imageURL','product_variants.selling_price')
        ->join('products as p','product_variants.product_id','=','p.id')
        ->where('product_variants.enabled',1)
        ->where('p.category_id',1)
        ->get();
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function noghog()
    {
        $data = ProductVariant::select('p.id','p.title','p.description','p.imageURL','product_variants.selling_price')
        ->join('products as p','product_variants.product_id','=','p.id')
        ->where('product_variants.enabled',1)
        ->where('p.category_id',2)
        ->get();
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function author()
    {
        $data = ProductVariant::select('p.id','p.title','p.description','p.imageURL','product_variants.selling_price')
        ->join('products as p','product_variants.product_id','=','p.id')
        ->where('product_variants.enabled',1)
        ->where('p.category_id',3)
        ->get();
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
