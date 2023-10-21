<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\EnCategory;
use App\Models\EnContact;
use App\Models\EnProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function detail($id){
        $local = \Session::get('applocale');

        if ($local == null) {
            $local = config('app.fallback_locale');
        }
        if ($local == "tr") {
            $data = Product::where('category_id',$id)->get();
            $baslik = Category::findOrFail($id);

        } elseif ($local == "en") {
            $data = EnProduct::where('category_id',$id)->get();
            $baslik = EnCategory::where('cateogry_id',$id)->first();

        }
        return view('frontend.category_detail',compact('data','baslik'));
    }

    public function product($id){
        $local = \Session::get('applocale');

        if ($local == null) {
            $local = config('app.fallback_locale');
        }


        if ($local == "tr") {
            $data = Product::where('slug',$id)->first();

        } elseif ($local == "en") {
            $data = EnProduct::where('slug',$id)->first();

        }
        return view('frontend.product_detail',compact('data'));
    }
}
