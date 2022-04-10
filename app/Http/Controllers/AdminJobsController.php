<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class AdminJobsController extends Controller
{
    //
    public function show(){

        return view('admin.jobs');
    }

    public function addNewJob(Request $request){


        $job = new Job();
        $job->name = $request->input('name');
        $job->image = $this->uploadFile($request->file('image'),'uploads');
        $job->deatline = $request->input('deatline');



        if($job->save())
        {
        return redirect()->route('show_job')
        ->with(['success'=>'job created successful']);
        }

        return back()->with(['error'=>'can not create job']);


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
