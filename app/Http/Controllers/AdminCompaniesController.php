<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class AdminCompaniesController extends Controller
{
    function show()
    {
        return  view('admin.company');
    }

    //insert Data

    function addNew(Request $request){
        

        $company = new Company();
        $company->name = $request->input('name');
        $company->description = $request->input('description');
        $company->is_active = $request->input('is_active')==="on"?1:0;

        $company->image = $this->uploadFile($request->file('image'),'uploads');

        if($company->save())
        {
        return redirect()->route('show_company')
        ->with(['success'=>'Company created successful']);
        }

        return back()->with(['error'=>'can not create company']);



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
