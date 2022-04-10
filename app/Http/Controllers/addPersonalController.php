<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddPers;

class addPersonalController extends Controller
{
    //
    public function showpers(){

        return view('add-personal');
    }

    public function addNewpers(Request $request){


        $addPers = new AddPers();
        $data = $request->post();

        $addPers->Fname = $request->input('fname');

        $addPers->Lname = $request->input('lname');
        $addPers->image = $request->input('image');
        $addPers->email = $request->input('email');
        $addPers->company = $request->input('company');



        $addPers->save();



    }

    public function uploadFile( $imageFile,$destination,$filename=""): string
    {
        if (!is_dir($destination)) {
            mkdir($destination);
        }

        if ($imageFile && $imageFile->getPathName()) {
            $image = explode('.', $imageFile->getClientOriginalName());
            $imageExtension = end($image);

            if(!empty($filename))
            {
                unlink($destination.'/' . $filename);
            }

            $imageName =  uniqid(). "." . $imageExtension;
            $imagePath =  $destination.'/' . $imageName;

            move_uploaded_file($imageFile->getPathName(), $imagePath);

            return $imageName;
        }

        return null;
    }

}
