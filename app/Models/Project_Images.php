<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_Images extends Model
{
    use HasFactory;
    protected $table = "project_images";
    protected $fillable = [
    	'project_id',
    	'image'
    ];
    public function product(){
    	return $this ->belongsTo('App\Models\Project','project_id');
    }
}
