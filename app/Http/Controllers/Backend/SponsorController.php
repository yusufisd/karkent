<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class SponsorController extends Controller
{
    public function add(){
        return view('backend.sponsor.add');
    }

    public function list(){
        $data = Sponsor::latest()->get();
        return view('backend.sponsor.list',compact('data'));
    }

    public function store(Request $request){
        $image = $request->file('image');
        $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $save = 'assets/uploads/sponsor/'.$image_name;
        Image::make($image)->resize(175,90)->save($save);

        $sponsor = new Sponsor();
        $sponsor->logo = $save;
        $sponsor->queue = $request->queue;
        $sponsor->save();

        Alert::success('Sponsor Başarıyla Eklendi');
        return redirect()->route('admin.sponsor.list');
    }

    public function destroy($id){
        $data = Sponsor::findOrFail($id);
        $data->delete();
        Alert::success('Sponsor Başarıyla Silindi');
        return redirect()->route('admin.sponsor.list');
    }
}
