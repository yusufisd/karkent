<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EnKvkk;
use App\Models\EnPoliciy;
use App\Models\Kvkk;
use App\Models\Policiy;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    public function kvkk_create(){
        $data = Kvkk::latest()->first();
        if($data == null){
            $data = "";
        }else{
            $data = $data->content;
        }

        $data2 = EnKvkk::latest()->first();
        if($data2 == null){
            $data2 = "";
        }else{
            $data2 = $data2->content;
        }
        return view('backend.page.kvkk',compact('data','data2'));
    }

    public function kvkk_update(Request $request){
        $request->validate([
            "content_tr" => "required",
            "content_en" => "required",
        ],[
            'content_tr.required' => 'İçerik boş bırakılamaz',
            'content_en.required' => 'İçerik boş bırakılamaz',
        ]);


        if(Kvkk::latest()->first() == null){
            Kvkk::create([
                "content" => $request->content_tr
            ]);
        }else{
            $kvkk = Kvkk::latest()->first();
            $kvkk->content = $request->content_tr;
            $kvkk->save();
        }

        if(EnKvkk::latest()->first() == null){
            EnKvkk::create([
                "content" => $request->content_tr
            ]);
        }else{
            $kvkk2 = EnKvkk::latest()->first();
            $kvkk2->content = $request->content_en;
            $kvkk2->save();
        }

        Alert::success('KVKK Sayfası Başarıyla Düzenlendi');
        return back();
    }

    public function politika_create(){
        $data = Policiy::latest()->first();
        if($data == null){
            $data = "";
        }else{
            $data = $data->content;
        }

        $data2 = EnPoliciy::latest()->first();
        if($data2 == null){
            $data2 = "";
        }else{
            $data2 = $data2->content;
        }
        return view('backend.page.policy',compact('data','data2'));
    }

    public function politika_update(Request $request){
        $request->validate([
            "content_tr" => "required",
            "content_en" => "required",
        ],[
            'content_tr.required' => 'İçerik boş bırakılamaz',
            'content_en.required' => 'İçerik boş bırakılamaz',
        ]);


        if(Policiy::latest()->first() == null){
            Policiy::create([
                "content" => $request->content_tr
            ]);
        }else{
            $kvkk = Policiy::latest()->first();
            $kvkk->content = $request->content_tr;
            $kvkk->save();
        }

        if(EnPoliciy::latest()->first() == null){
            EnPoliciy::create([
                "content" => $request->content_tr
            ]);
        }else{
            $kvkk2 = EnPoliciy::latest()->first();
            $kvkk2->content = $request->content_en;
            $kvkk2->save();
        }

        Alert::success('Politika Sayfası Başarıyla Düzenlendi');
        return back();
    }
}
