<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    // add product 
    public $timestamps = false; //
    protected $fillable = ['ProductId', 'ProductName', 'Unit', 'Price', 'CategoryId', 'Img'];
    public function Category()
    {
        return $this->belongsTo(Category::class, "CategoryId", "ProductId");
    }
}
