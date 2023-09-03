<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\EnAbout;
use App\Models\Logs;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Throwable;

class AboutController extends Controller
{

    public function add()
    {
        $data_tr = About::latest()->first();
        $data_en = EnAbout::latest()->first();
        return view('backend.about.add', compact('data_tr', 'data_en'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();


            $request->validate([
                "def_4_title" => "required",
                "def_4_description" => "required",
                "def_4_title_1" => "required",
                "def_4_icon1" => "required",
                "def_4_description_1" => "required",
                "def_4_title_2" => "required",
                "def_4_icon2" => "required",
                "def_4_description_2" => "required",
                "def_4_title_3" => "required",
                "def_4_icon3" => "required",
                "def_4_description_3" => "required",
                "def_4_title_4" => "required",
                "def_4_icon4" => "required",
                "def_4_description_4" => "required",

                "def_4_title_en" => "required",
                "def_4_description_en" => "required",
                "def_4_title_1_en" => "required",
                "def_4_icon1_en" => "required",
                "def_4_description_1_en" => "required",
                "def_4_title_2_en" => "required",
                "def_4_icon2_en" => "required",
                "def_4_description_2_en" => "required",
                "def_4_title_3_en" => "required",
                "def_4_icon3_en" => "required",
                "def_4_description_3_en" => "required",
                "def_4_title_4_en" => "required",
                "def_4_icon4_en" => "required",
                "def_4_description_4_en" => "required",


            ]);

            if (About::latest()->first() != null) {
                $about = About::latest()->first();
            } else {
                $about = new About();
            }
            $about->title = $request->def_4_title;
            $about->description = $request->def_4_description;
            $about->title1 = $request->def_4_title_1;
            $about->icon1 = $request->def_4_icon1;
            $about->url1 = $request->def_4_description_1;
            $about->title2 = $request->def_4_title_2;
            $about->icon2 = $request->def_4_icon2;
            $about->url2 = $request->def_4_description_2;
            $about->title3 = $request->def_4_title_3;
            $about->icon3 = $request->def_4_icon3;
            $about->url3 = $request->def_4_description_3;
            $about->title4 = $request->def_4_title_4;
            $about->icon4 = $request->def_4_icon4;
            $about->url4 = $request->def_4_description_4;
            $about->save();

            if (EnAbout::latest()->first() != null) {
                $about_en = EnAbout::latest()->first();
            } else {
                $about_en = new EnAbout();
            }
            $about_en->title = $request->def_4_title_en;
            $about_en->description = $request->def_4_description_en;
            $about_en->title1 = $request->def_4_title_1_en;
            $about_en->icon1 = $request->def_4_icon1_en;
            $about_en->url1 = $request->def_4_description_1_en;
            $about_en->title2 = $request->def_4_title_2_en;
            $about_en->icon2 = $request->def_4_icon2_en;
            $about_en->url2 = $request->def_4_description_2_en;
            $about_en->title3 = $request->def_4_title_3_en;
            $about_en->icon3 = $request->def_4_icon3_en;
            $about_en->url3 = $request->def_4_description_3_en;
            $about_en->title4 = $request->def_4_title_4_en;
            $about_en->icon4 = $request->def_4_icon4_en;
            $about_en->url4 = $request->def_4_description_4_en;
            $about_en->save();
            logKayit(['Kurumsal','Kurumsal sayfa düzenleme başarıılı']);
            Alert::success('Kurumsal Sayfası Güncellendi');

            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            logKayit(['Kurumsal','Kurumsal sayfa düzenlemede hata',0]);
            Alert::error('Banka Eklemede Hata');
            return redirect()->back();
        }

        return back();
    }
}
