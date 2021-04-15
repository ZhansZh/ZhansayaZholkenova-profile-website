<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Item;
use  App\Models\ItemDetails;


class UplController extends Controller
{
    
   public function uploadForm(){
    return view('contact');
  }

  public function uploadSubmit(Request $request){
  		$this->validate($request, ['name' => 'required',
  			'photos' => 'required',

  		]);


  		if($request->hasFile('photos')){
  			$allowedfileExtension=['pdf', 'jpg', 'png', 'docx'];
  			$files = $request->file('photos');
  			foreach($files as $file){
  				 $filename = $file->getClientOriginalName();
  				 $extension = $file->getClientOriginalExtension();
  				 $check = in_array($extension, $allowedfileExtension);
  				 if($check){
  				 	$items= Item::create($request->all());
  				 	foreach($request->photos as $photo){
  				 		$filename = $photo->store('photos');
  				 		ItemDetails::create([
  				 			'item_id' => $items->id,
  				 			'filename' => $filename
  				 		]);
  				 		
            
  				 	
  				 }
  				 	echo "Upload Succesfully";
  				 }
  				 else{
  				 	echo "Fail";
  				 }

  			}
  		}
  }

}
