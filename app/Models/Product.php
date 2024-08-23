<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table        = 'products';
    protected $primaryKey   = 'product_id';
    protected $fillable     = ['product_name', 'description', 'stock', 'unit', 'price', 'category_id', 'user_id'];

    public function images()
    {
        return $this->hasMany('App\Models\ProductImage', 'product_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
