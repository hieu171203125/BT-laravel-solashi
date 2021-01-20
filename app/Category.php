<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    public $timestamps = false; 
	protected $fillable = [
		'name','updated_at'
	];
	protected $primaryKey = 'id';
	protected $table = 'categoris';
}
