<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\EnAbout;
use App\Models\EnHistory;
use App\Models\History;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        
        $local = \Session::get('applocale');

        if ($local == null) {
            $local = config('app.fallback_locale');
        }


        if ($local == "tr") {
            $tarihce = History::orderBy('year', 'asc')->get();
            $about = About::latest()->first();
        } elseif ($local == "en") {
            $tarihce = EnHistory::orderBy('year', 'asc')->get();
            $about = EnAbout::latest()->first();

        }
        return view('frontend.about',compact('tarihce','about'));
    }
}
