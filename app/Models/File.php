<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    
    protected $fillable = ['username', 'email', 'feedback' 'name'];
    protected function file_details(){
    	return $this->hasMany(FileDetails::class);
    }
}
