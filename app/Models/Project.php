<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   // use HasFactory;
	protected $table = "projects";
    protected $primaryKey = 'id';
    protected $dates = ['created_at'];
    protected $fillable =[
    	'category',
    	'image',
    	'gallery',
    	'client',
    	'url',
    	'details'
    ];

    public function images(){
        return $this->hasMany('App\Models\Project_Images','project_id');
    }
}
