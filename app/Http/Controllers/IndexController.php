<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request){
        $input=$request->All();

        $this->viewdata['liste'] =array();
        return view('index')->with($this->viewdata);
    }

    public function listeProduit(Request $request){
        $input=$request->All();

        $this->viewdata['liste'] =array();
        return view('product')->with($this->viewdata);
    }

    public function ficheProduit(Request $request){
        $input=$request->All();

        $this->viewdata['liste'] =array();
        return view('fiche')->with($this->viewdata);
    }
}
