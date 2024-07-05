<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    //use HasFactory;
    protected $table = 'certification';
    protected $primaryKey = 'id';
    protected $date = ['created_at'];
    protected $date_given = ['date_given'];
    protected $fillable = [
    	'name',
    	'certificate',
    	'institution',
    	'certNumber'
    ];
}
