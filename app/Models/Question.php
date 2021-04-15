<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'question', 'image'];
    public function customer(){
    	return $this -> belongsTo(Customer::class);
    }
}