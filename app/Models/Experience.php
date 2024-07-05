<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    //use HasFactory;
    protected $table = 'experience';
    protected $primaryKey = 'id';
    protected $date = ['created_at'];
    protected $start_date = ['start_date'];
    protected $end_date = ['end_date'];
    protected $fillable = [
    	'role',
    	'place',
    	'activities'
    ];
}
