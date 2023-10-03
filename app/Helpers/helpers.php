<?php

use App\Models\Category;
use App\Models\Contact;
use App\Models\EnCategory;
use App\Models\EnProduct;
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
    if ($local == 'tr') {
        $data = Category::orderBy('queue', 'asc')->get();
    } elseif ($local == 'en') {
        $data = EnCategory::orderBy('queue', 'asc')->get();
    }

    return $data;
}

function products2($id)
{
    $local = \Session::get('applocale');
    if ($local == null) {
        $local = config('app.fallback_locale');
    }
    if ($local == 'tr') {
        return Product::where('category_id', $id)
            ->orderBy('queue', 'asc')
            ->get();
    } elseif ($local == 'en') {
        return EnProduct::where('category_id', $id)
            ->orderBy('queue', 'asc')
            ->get();
    }
}

function role_count($id)
{
    return UserModel::where('role_id', $id)->count();
}

function logKayit($id)
{
    if (Auth::guard('user_model')->user() == null) {
        $auth = Auth::guard('admin')->user();
    } else {
        $auth = Auth::guard('user_model')->user();
    }
    $log = new Logs();
    $log->title = $id[0];
    $log->description = $id[1];
    $log->user = $auth->name . ' ' . $auth->surname;
    if (isset($id[2])) {
        $log->success = 0;
    }
    $log->save();
}

function userCount()
{
    return UserModel::count();
}

function productCount()
{
    return Product::count();
}

function categoryCount()
{
    return Category::count();
}

function infos()
{
    $data = Contact::latest()->first();
    return $data;
}
