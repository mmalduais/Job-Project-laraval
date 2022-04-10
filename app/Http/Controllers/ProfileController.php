<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\AddExp;

class ProfileController extends Controller
{
    function showprofile()
    {
        $e= AddExp::all();
        return  view('profile.protofile',['experts'=>$e]);
    }

    //insert Data

    function addNew(Request $request){




    }

    public function uploadFile( $imageFile,$destination,$filename=""): string
    {

    }

}
