<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //use HasFactory;
      protected $table = 'education';
    protected $primaryKey = 'id';
    protected $date = ['created_at'];
    protected $start_date = ['start_date'];
    protected $end_date = ['end_date'];
    protected $fillable = [
    	'course',
    	'icon',
    	'institution',
    	'location',
    	'about'
    ];
}
