<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\EnCategory;
use App\Models\EnHistory;
use App\Models\EnPageDefinitous1;
use App\Models\EnPageDefinitous2;
use App\Models\EnPageDefinitous3;
use App\Models\EnPageDefinitous4;
use App\Models\EnSlider;
use App\Models\History;
use App\Models\PageDefinitous1;
use App\Models\PageDefinitous2;
use App\Models\PageDefinitous3;
use App\Models\PageDefinitous4;
use App\Models\Slider;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $local = \Session::get('applocale');

        if ($local == null) {
            $local = config('app.fallback_locale');
        }


        if ($local == "tr") {
            $tarihce = History::orderBy('year', 'asc')->get();
            $page_def1 = PageDefinitous1::latest()->first();
            $page_def2 = PageDefinitous2::latest()->first();
            $page_def3 = PageDefinitous3::latest()->first();
            $page_def4 = PageDefinitous4::latest()->first();
            $categories = Category::latest()->get();
            $sliders = Slider::where('status',1)->orderBy('queue','asc')->get();
        } elseif ($local == "en") {
            $tarihce = EnHistory::orderBy('year', 'asc')->get();
            $page_def1 = EnPageDefinitous1::latest()->first();
            $page_def2 = EnPageDefinitous2::latest()->first();
            $page_def3 = EnPageDefinitous3::latest()->first();
            $page_def4 = EnPageDefinitous4::latest()->first();
            $categories = EnCategory::latest()->get();
            $sliders = EnSlider::where('status',1)->orderBy('queue','asc')->get();
        }

        $sponsors = Sponsor::orderBy('queue', 'asc')->get();
        return view('frontend.index', compact('sliders', 'tarihce', 'sponsors', 'page_def1', 'page_def2', 'page_def3', 'page_def4', 'categories'));
    }
}
