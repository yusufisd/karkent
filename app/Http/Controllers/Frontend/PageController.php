<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\EnKvkk;
use App\Models\EnPoliciy;
use App\Models\Kvkk;
use App\Models\Policiy;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function kvkk()
    {
        $local = \Session::get('applocale');

        if ($local == null) {
            $local = config('app.fallback_locale');
        }

        if ($local == 'tr') {
            $data = Kvkk::latest()->first();
            if ($data != null) {
                $data = $data->content;
            } else {
                $data = '';
            }
        } elseif ($local == 'en') {
            $data = EnKvkk::latest()->first();
            if ($data != null) {
                $data = $data->content;
            } else {
                $data = '';
            }
        }

        return view('frontend.kvkk', compact('data'));
    }

    public function politika()
    {
        $local = \Session::get('applocale');

        if ($local == null) {
            $local = config('app.fallback_locale');
        }

        if ($local == 'tr') {
            $data = Policiy::latest()->first();
            if ($data != null) {
                $data = $data->content;
            } else {
                $data = '';
            }
        } elseif ($local == 'en') {
            $data = EnPoliciy::latest()->first();
            if ($data != null) {
                $data = $data->content;
            } else {
                $data = '';
            }
        }

        return view('frontend.politika', compact('data'));
    }
}
