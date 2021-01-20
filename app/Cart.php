<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public $timestamps = false; 
	protected $fillable = [
		'brandName'
	];
	protected $primaryKey = 'id';
	protected $table = 'brand';
}
