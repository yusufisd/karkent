<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EnPageDefinitous1;
use App\Models\EnPageDefinitous2;
use App\Models\EnPageDefinitous3;
use App\Models\EnPageDefinitous4;
use App\Models\PageDefinitous1;
use App\Models\PageDefinitous1_en;
use App\Models\PageDefinitous2;
use App\Models\PageDefinitous3;
use App\Models\PageDefinitous4;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PageDefinitousController extends Controller
{
    public function add(){
        $def1_tr = PageDefinitous1::latest()->first();
        $def1_en = EnPageDefinitous1::latest()->first();

        $def2_tr = PageDefinitous2::latest()->first();
        $def2_en = EnPageDefinitous2::latest()->first();

        $def3_tr = PageDefinitous3::latest()->first();
        $def3_en = EnPageDefinitous3::latest()->first();

        $def4_tr = PageDefinitous4::latest()->first();
        $def4_en = EnPageDefinitous4::latest()->first();

        
        return view('backend.home.page_definitous.add',compact('def1_tr','def1_en','def2_tr','def2_en','def3_tr','def3_en','def4_tr','def4_en'));

    }

    public function store(Request $request){


        $definitous1 = new PageDefinitous1();
        $definitous1->title1 = $request->def1_title_tr;
        $definitous1->description1 = $request->def1_description_tr;
        $definitous1->icon1 = $request->def1_icon_tr;

        $definitous1->title2 = $request->def2_title_tr;
        $definitous1->description2 = $request->def2_description_tr;
        $definitous1->icon2 = $request->def2_icon_tr;

        $definitous1->title3 = $request->def3_title_tr;
        $definitous1->description3 = $request->def3_description_tr;
        $definitous1->icon3 = $request->def3_icon_tr;
        $definitous1->save();


        $definitous1_en = new EnPageDefinitous1();
        $definitous1_en->title1 = $request->def1_title_en;
        $definitous1_en->description1 = $request->def1_description_en;
        $definitous1_en->icon1 = $request->def1_icon_en;

        $definitous1_en->title2 = $request->def2_title_en;
        $definitous1_en->description2 = $request->def2_description_en;
        $definitous1_en->icon2 = $request->def2_icon_en;

        $definitous1_en->title3 = $request->def3_title_en;
        $definitous1_en->description3 = $request->def3_description_en;
        $definitous1_en->icon3 = $request->def3_icon_en;
        $definitous1_en->definitous_id = $definitous1->id;
        $definitous1_en->save();
        


        $definitous2 = new PageDefinitous2();
        $definitous2->title = $request->page_def_title;
        $definitous2->description = $request->page_def_description;
        $definitous2->button_url = $request->page_def_button_url;
        $definitous2->button_title = $request->page_def_button_text;
        $definitous2->video_url = $request->page_def_video_url;
        $definitous2->save();

        $definitous2_en = new EnPageDefinitous2();
        $definitous2_en->title = $request->page_def_title_en;
        $definitous2_en->description = $request->page_def_description_en;
        $definitous2_en->button_url = $request->page_def_button_url_en;
        $definitous2_en->button_title = $request->page_def_button_text_en;
        $definitous2_en->video_url = $request->page_def_video_url_en;
        $definitous2_en->definitous_id = $definitous2->id;
        $definitous2_en->save();



        $definitous3 = new PageDefinitous3();
        $definitous3->title1_1 = $request->page_def3_title_a;
        $definitous3->title1_2 = $request->page_def3_title_a1;
        $definitous3->icon1 = $request->page_def3_icon1;

        $definitous3->title2_1 = $request->page_def3_title_b;
        $definitous3->title2_2 = $request->page_def3_title_b1;
        $definitous3->icon2 = $request->page_def3_icon2;

        $definitous3->title3_1 = $request->page_def3_title_c;
        $definitous3->title3_2 = $request->page_def3_title_c1;
        $definitous3->icon3 = $request->page_def3_icon3;

        $definitous3->title4_1 = $request->page_def3_title_d;
        $definitous3->title4_2 = $request->page_def3_title_d1;
        $definitous3->icon4 = $request->page_def3_icon4;
        $definitous3->save();

        $definitous3_en = new EnPageDefinitous3();
        $definitous3_en->title1_1 = $request->page_def3_title_a_en;
        $definitous3_en->title1_2 = $request->page_def3_title_a1_en;
        $definitous3_en->icon1 = $request->page_def3_icon1_en;

        $definitous3_en->title2_1 = $request->page_def3_title_b_en;
        $definitous3_en->title2_2 = $request->page_def3_title_b1_en;
        $definitous3_en->icon2 = $request->page_def3_icon2_en;

        $definitous3_en->title3_1 = $request->page_def3_title_c_en;
        $definitous3_en->title3_2 = $request->page_def3_title_c1_en;
        $definitous3_en->icon3 = $request->page_def3_icon3_en;

        $definitous3_en->title4_1 = $request->page_def3_title_d_en;
        $definitous3_en->title4_2 = $request->page_def3_title_d1_en;
        $definitous3_en->icon4 = $request->page_def3_icon4_en;
        $definitous3_en->definitous_id = $definitous3->id;
        $definitous3_en->save();



        $definitous4 = new PageDefinitous4();
        $definitous4->title = $request->def_4_title;
        $definitous4->description = $request->def_4_description;
        $definitous4->title1 = $request->def_4_title_1;
        $definitous4->description1 = $request->def_4_description_1;
        $definitous4->icon1 = $request->def_4_icon1;
        $definitous4->title2 = $request->def_4_title_2;
        $definitous4->description2 = $request->def_4_description_2;
        $definitous4->icon2 = $request->def_4_icon2;
        $definitous4->title3 = $request->def_4_title_3;
        $definitous4->description3 = $request->def_4_description_3;
        $definitous4->icon3 = $request->def_4_icon3;
        $definitous4->title4 = $request->def_4_title_4;
        $definitous4->description4 = $request->def_4_description_4;
        $definitous4->icon4 = $request->def_4_icon4;
        $definitous4->save();

        $definitous4_en = new EnPageDefinitous4();
        $definitous4_en->title = $request->def_4_title_en;
        $definitous4_en->description = $request->def_4_description_en;
        $definitous4_en->title1 = $request->def_4_title_1_en;
        $definitous4_en->description1 = $request->def_4_description_1_en;
        $definitous4_en->icon1 = $request->def_4_icon1_en;
        $definitous4_en->title2 = $request->def_4_title_2_en;
        $definitous4_en->description2 = $request->def_4_description_2_en;
        $definitous4_en->icon2 = $request->def_4_icon2_en;
        $definitous4_en->title3 = $request->def_4_title_3_en;
        $definitous4_en->description3 = $request->def_4_description_3_en;
        $definitous4_en->icon3 = $request->def_4_icon3_en;
        $definitous4_en->title4 = $request->def_4_title_4_en;
        $definitous4_en->description4 = $request->def_4_description_4_en;
        $definitous4_en->icon4 = $request->def_4_icon4_en;
        $definitous4_en->definitous_id = $definitous4->id;
        $definitous4_en->save();

        Alert::success('Sayfa Tanımları Başarıyla Eklendi');
        return back();
        
    }
}
