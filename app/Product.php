<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Images;

class Product extends Model
{
	//
	public $timestamps = true;
	protected $fillable = [
		'code', 'name', 'description', 'category_id', 'price','quantity', 'is_top', 'on_sale', 'updated_at',
	];
	protected $primaryKey = 'id';
	protected $table = 'products';

	public function images()
	{
		return $this->hasMany(Images::class, 'product_id', 'id');
	}
	public function categoris()
	{
		return $this->hasOne(Category::class, 'id', 'category_id');
	}
}
