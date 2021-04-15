<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\FileDetails;

class FileUpload extends Controller
{
    //

 public function createForm(){
    return view('contact');
  }

  public function fileUpload(Request $req){

  $req->validate([
        'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ]);

        $fileModel = new File;
        $fileDetailsModel = new FileDetails;

         if($req->file()){

         	$fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->file_name = time().'_'.$req->file->getClientOriginalName();
            $fileMDetailsModel->file_path = '/storage/' . $filePath;
            $fileModel->save();
            $fileMDetailsModel->save();

            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);

         }

}
}
