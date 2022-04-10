<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller


{


    public function showLogin(){

        return view('admin.login');
    }
    function addjob()
    {
        return view('admin.jobs');
    }

    function comp()
    {
        return view('admin.company');
    }


}
