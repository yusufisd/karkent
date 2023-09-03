<?php

use App\Models\Category;
use App\Models\Contact;
use App\Models\EnCategory;
use App\Models\Logs;
use App\Models\Product;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;

function getLang()
{
    return session('applocale');
}

function categories2()
{
    $local = \Session::get('applocale');
    if ($local == null) {
        $local = config('app.fallback_locale');
    }
    if ($local == "tr") {
        $data = Category::latest()->get();
    } elseif ($local == "en") {
        $data = EnCategory::latest()->get();
    }

    return $data;
}

function products2($id)
{
    return Product::where('category_id', $id)->get();
}

function role_count($id){
    return UserModel::where('role_id',$id)->count();
}

function logKayit($id){
    if(Auth::guard('user_model')->user() == null){
        $auth = Auth::guard('admin')->user();
    }else{
        $auth = Auth::guard('user_model')->user();
    }
    $log = new Logs();
    $log->title = $id[0];
    $log->description = $id[1];
    $log->user = $auth->name." ".$auth->surname;
    if(isset($id[2])){
        $log->success = 0;
    }
    $log->save();
}

function userCount(){
    return UserModel::count();
}

function productCount(){
    return Product::count();
}

function categoryCount(){
    return Category::count();
}

function infos(){
    $data = Contact::find(1);
    return $data;
}
