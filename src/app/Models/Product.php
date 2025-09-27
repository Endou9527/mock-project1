<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'brand' , 'image' , 'price' , 'description' , 'status_id'
    ];

    public function categories(){
        return $this->belongsToMany(Category::class,'product_category');
    }
}
