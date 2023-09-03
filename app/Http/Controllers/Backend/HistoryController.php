<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EnHistory;
use App\Models\History;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Throwable;

class HistoryController extends Controller
{
    public function index()
    {
        $data = History::latest()->get();
        return view('backend.history.list', compact('data'));
    }

    public function create()
    {
        return view('backend.history.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            "title_tr" => "required",
            "year_tr" => "required",
            "description_tr" => "required",
            "title_en" => "required",
            "year_en" => "required",
            "description_en" => "required",
        ]);
        try {
            DB::beginTransaction();

            $history = new History();
            $history->title = $request->title_tr;
            $history->year = $request->year_tr;
            $history->description = $request->description_tr;
            $history->save();

            $history_en = new EnHistory();
            $history_en->title = $request->title_en;
            $history_en->year = $request->year_en;
            $history_en->description = $request->description_en;
            $history_en->history_id = $history->id;
            $history_en->save();

            logKayit(['Tarihçe', 'Tarihçe Eklendi']);
            Alert::success('Tarihçe Başarıyla Eklendi');
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            logKayit(['Tarihçe', 'Tarihçe Eklemede Hata', 0]);
            Alert::error('Tarihçe Eklemede Hata');
            return redirect()->back();
        }
        return redirect()->route('admin.history.list');
    }

    public function edit($id)
    {
        $data_tr = History::findOrFail($id);
        $data_en = EnHistory::where('history_id', $id)->first();
        return view('backend.history.edit', compact('data_tr', 'data_en'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "title_tr" => "required",
            "year_tr" => "required",
            "description_tr" => "required",
            "title_en" => "required",
            "year_en" => "required",
            "description_en" => "required",
        ]);
        try {
            DB::beginTransaction();

            $history = History::find($id);
            $history->title = $request->title_tr;
            $history->year = $request->year_tr;
            $history->description = $request->description_tr;
            $history->save();

            $history_en = EnHistory::where('history_id', $id)->first();
            $history_en->title = $request->title_en;
            $history_en->year = $request->year_en;
            $history_en->description = $request->description_en;
            $history_en->history_id = $history->id;
            $history_en->save();

            logKayit(['Tarihçe', 'Tarihçe Düzenlendi']);
            Alert::success('Tarihçe Başarıyla Düzenlendi');
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            logKayit(['Tarihçe', 'Tarihçe Düzenlemede Hata', 0]);
            Alert::error('Tarihçe Düzenlemede Hata');
            return redirect()->back();
        }
        return redirect()->route('admin.history.list');
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $data = History::findOrFail($id);
            EnHistory::where('history_id', $id)->delete();
            $data->delete();
            logKayit(['Tarihçe', 'Tarihçe Silindi']);
            Alert::success('Tarihçe Başarıyla Silindi');
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            logKayit(['Tarihçe', 'Tarihçe Silmede Hata', 0]);
            Alert::error('Tarihçe Eklemede Hata');
            return redirect()->back();
        }
        return redirect()->route('admin.history.list');
    }
}
