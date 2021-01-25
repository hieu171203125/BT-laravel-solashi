<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public $timestamps = false;  
	protected $fillable = [
		'user_id','product_id','quantity','status'
	];
	protected $primaryKey = 'id';
	protected $table = 'carts';

	public function users()
	{
		return $this->hasOne(User::class, 'id', 'user_id');
	}
	public function products()
	{
		return $this->hasOne(Product::class, 'id', 'product_id');
	}
}
