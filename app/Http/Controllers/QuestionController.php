<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Question;
use App\Http\DB;


class QuestionController extends Controller
{
    //
    public function index(Request $req){
//find or create 
        /*Customer::updated([
            'name' => $req->name,
            'email' => $req->email,
        ]);*/
        $user = Customer::where('email', request('email'))->first();

        if ($user === null) {
            $user = new Customer(['email' => request('email')]);
        }

        $user->name = request('name');

        $user->save();
        
        //$customer = Customer::create($req->all());
        if($req->file == null) {
            Question::create([
                'customer_id' => $user->id,
                'question' => $req->question,
                'image' =>''
                ]);
        }else{
            Question::create([
                'customer_id' => $user->id,
                'question' => $req->question,
                'image' =>$req->file
            ]);
        }
        

        
        
        
        
        //Mail::to($req->email)->send(new WelcomeMail());
     
        //return back();
        //return redirect();
        return back();
    }
}