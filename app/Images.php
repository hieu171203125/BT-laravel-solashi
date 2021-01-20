<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    //
    public $timestamps = false; 
	protected $fillable = [
		'path','product_id','updated_at'
	];
	protected $primaryKey = 'id';
	
	protected $table = 'images';


}
