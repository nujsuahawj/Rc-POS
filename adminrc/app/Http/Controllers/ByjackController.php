<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class ByjackController extends Controller
{
    public function showall()
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
}
