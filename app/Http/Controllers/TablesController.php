<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tables;

class TablesController extends Controller
{
    public function getProduct(){
        $id=2;
        $result=Tables::select()->get();
        return view('dispProduct', compact('result'));
    }
    //
}
