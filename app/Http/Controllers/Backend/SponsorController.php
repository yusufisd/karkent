<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Throwable;

class SponsorController extends Controller
{
    public function add()
    {
        return view('backend.sponsor.add');
    }

    public function list()
    {
        $data = Sponsor::orderBy('queue','asc')->get();
        return view('backend.sponsor.list', compact('data'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $save = 'assets/uploads/sponsor/' . $image_name;
            Image::make($image)->resize(175, 90)->save($save);

            $sponsor = new Sponsor();
            $sponsor->logo = $save;
            $sponsor->queue = $request->queue;
            $sponsor->save();

            logKayit(['Sponsor', 'Sponsor Eklendi']);
            Alert::success('Sponsor Başarıyla Eklendi');
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            logKayit(['Sponsor', 'Sponsor Eklemede Hata', 0]);
            Alert::error('Sponsor Eklemede Hata');
            return redirect()->back();
        }
        return redirect()->route('admin.sponsor.list');
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $data = Sponsor::findOrFail($id);
            $data->delete();
            logKayit(['Sponsor', 'Sponsor Silindi']);
            Alert::success('Sponsor Başarıyla Silindi');
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            logKayit(['Sponsor', 'Sponsor Silmede Hata', 0]);
            Alert::error('Sponsor Silmede Hata');
            return redirect()->back();
        }
        return redirect()->route('admin.sponsor.list');
    }
}
