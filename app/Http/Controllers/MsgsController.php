<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Msgs;


class MsgsController extends Controller
{
    public function getDB(){
        $result=Msgs::select()->get(); //model からデータを読む
        $str="model からデータを読む";
        return view('msg',compact('result','str')); //view を読む
        

    }
    //
}
