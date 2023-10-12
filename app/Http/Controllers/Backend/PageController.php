<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EnKvkk;
use App\Models\Kvkk;
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
            $data3 = $data2->content;
        }
        return view('backend.page.kvkk',compact('data','data3'));
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
}
