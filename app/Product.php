<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Images;
class Product extends Model
{
    //
    public $timestamps = false; 
	protected $fillable = [
		'code','name','description','category_id','price','is_top','on_sale','updated_at',
	];
	protected $primaryKey = 'id';
	protected $table = 'products';

	public function images()
    {
        return $this->hasMany(Images::class, 'product_id', 'id');    
    }
}
