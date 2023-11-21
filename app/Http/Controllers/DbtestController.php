<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbtestController extends Controller
{
    //
    public function getALLTables(){
        $resultALL=DB::table("tables")->get();//select * from tables
       // $resultWHERE=DB::table("tables")->where("id",1)->get();//select * from tables where id=1
      //  $resultWHERE=DB::table("tables")->where("id",">=",2)->get();//select * from tables where id=1
        $resultWHERE=DB::table("tables")->where("name","like","%ドラム%")->get();//select * from tables where id=1
        $resultFIND=DB::table("tables")->find(1);
        return view('getTables',compact('resultWHERE','resultFIND','resultALL'));
    }
}
