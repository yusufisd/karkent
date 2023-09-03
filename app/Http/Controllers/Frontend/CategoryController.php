<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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

        } elseif ($local == "en") {
            $data = EnProduct::where('category_id',$id)->get();

        }
        return view('frontend.category_detail',compact('data'));
    }
}
