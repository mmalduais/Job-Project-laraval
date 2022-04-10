<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddExp;

class addExpController extends Controller
{
    //
    public function showExp(){

        return view('add-exper');
    }

    public function addNewexp(Request $request){


        $adExp = new AddExp();
        $data = $request->post();

        $adExp->name = $request->input('name');

        $adExp->des = $request->input('des');
        $adExp->des = $request->input('des');



        $adExp->save();



    }



}
