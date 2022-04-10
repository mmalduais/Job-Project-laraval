<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddServ;

class addServController extends Controller
{
    //
    public function showServ(){

        return view('add-services');
    }

    public function addNewserv(Request $request){


        $addServ = new AddServ();
        $data = $request->post();

        $addServ->title = $request->input('title');

        $addServ->des = $request->input('des');



        $addServ->save();



    }



}
