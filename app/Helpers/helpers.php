<?php

use App\Models\Category;
use App\Models\Product;

function getLang(){
    return session('applocale');
}

function categories2(){
    $data = Category::latest()->get();
    return $data;
}

function products2($id){
    return Product::where('category_id',$id)->get();
}