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
        if (Sponsor::latest()->first() != null) {
            $no = Sponsor::orderBy('queue', 'desc')->first()->queue + 1;
        } else {
            $no = 1;
        }
        return view('backend.sponsor.add', compact('no'));
    }

    public function list()
    {
        $data = Sponsor::orderBy('queue', 'asc')->get();
        return view('backend.sponsor.list', compact('data'));
    }

    public function edit($id)
    {
        $data = Sponsor::find($id);
        return view('backend.sponsor.edit', compact('data'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $save = 'assets/uploads/sponsor/' . $image_name;
            Image::make($image)
                ->resize(175, 90)
                ->save($save);

            $sponsor = new Sponsor();
            $sponsor->logo = $save;
            $sponsor->queue = $request->queue;
            if ($request->allowadd_slider_en == null) {
                $sponsor->status = 0;
            }
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

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $sponsor = Sponsor::findOrFail($id);

            if ($request->file('image') != null) {
                $image = $request->file('image');
                $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $save = 'assets/uploads/sponsor/' . $image_name;
                Image::make($image)
                    ->resize(175, 90)
                    ->save($save);
                $sponsor->logo = $save;
            }
            if ($request->queue < $sponsor->queue) {
                for ($i = $request->queue; $i < $sponsor->queue; $i++) {
                    $data = Sponsor::where('queue', $i)->first();
                    $data->update([
                        'queue' => $data->queue + 1,
                    ]);
                }
                $sponsor->queue = $request->queue;
            }
            if ($request->queue > $sponsor->queue) {
                for ($i = $request->queue; $i > $sponsor->queue; $i--) {
                    $data = Sponsor::where('queue', $i)->first();
                    $data->update([
                        'queue' => $data->queue - 1,
                    ]);
                }
                $sponsor->queue = $request->queue;
            }
            if($request->allowadd_slider_en == null){
                $sponsor->status = 0;
            }
            $sponsor->save();

            logKayit(['Sponsor', 'Sponsor Düzenlendi']);
            Alert::success('Sponsor Başarıyla Düzenlendi');
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            logKayit(['Sponsor', 'Sponsor Düzenlemede Hata', 0]);
            Alert::error('Sponsor Düzenlemede Hata');
            return redirect()->back();
        }
        return redirect()->route('admin.sponsor.list');
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $data = Sponsor::findOrFail($id);
            $son = Sponsor::orderBy('queue', 'desc')->first();

            for ($i = $id + 1; $i <= $son->queue; $i++) {
                $variable = Sponsor::where('queue', $i)->first();
                $variable->queue = $variable->queue - 1;
                $variable->save();
            }
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

    public function status_change($id)
    {
        $data = Sponsor::findOrFail($id);
        $data->status = !$data->status;
        $data->save();

        Alert::success('Logo Statüsü Değiştirildi');
        return redirect()->route('admin.sponsor.list');
    }
}
