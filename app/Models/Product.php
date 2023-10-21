<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'multiple_image' => 'array'
    ];

    public function Category(){
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function ImageCounter(){
        $data = Product::findOrFail($this->id);
        return count($data->multiple_image);
    }
}
