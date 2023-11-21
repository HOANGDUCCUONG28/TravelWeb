<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getProduct(){
        $result=DB::table("products")->get();    
        return view('dispProductList',compact('result'));
    }
    public function getProductDetail(Request $request){
        $resultDetail=DB::table("products")->where("id",$request->input('detailID'))->get(); 
        return view('dispProductDetail',compact('resultDetail'));
    }
    
    public function addCart(Request $request){
        $resultDetail=DB::table("products")->find($request->input('detailID')); 
        $SessionProductID=$resultDetail->id;
        $SessionProductNAME=$resultDetail->name;
        $SessionProductPRICE=$resultDetail->price;
        $SessionProductIMGFILE1=$resultDetail->imgfile1;
        $SessionData=compact("SessionProductID","SessionProductNAME","SessionProductPRICE","SessionProductIMGFILE1");
        $request->session()->push('cart_data',$SessionData);
        return view('dispCart');
    }
    public function delCartAll(Request $request){
        $request->session()->forget('cart_data');
        return view('dispCart');
    }
    public function delCartDetail(Request $request){
        $idx=$request->input('detailID');
        $request->session()->forget('cart_data.'.$idx);
        return view('dispCart');
    }
    public function checkout(Request $request){
        $result=DB::table("products")->get();
        return view('checkout',compact('result'));
    }
}