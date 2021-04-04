<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadFile;


class UploadController extends Controller
{
	 function index(Request $request) {
         $this->validate($request, [
         'name' => 'required',
         'surname' => 'required',
         'email'=>'required',
         'photos'=>'required'
         ]);
         
           UploadFile::create([
             'name'=>$request->name,
             'surname'=>$request->surname,
             'email'=>$request->email
             ]);
             return $request->file('photos')->store('docs');
       }   

}