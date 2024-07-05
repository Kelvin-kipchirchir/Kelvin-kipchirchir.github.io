<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //use HasFactory;
    protected $table = "profile_pic";
    protected $primaryKey = 'id';
    protected $dates = ['created_at'];
    protected $fillable =[
    	'profile_pic'
    ];
}
