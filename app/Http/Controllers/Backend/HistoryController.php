<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EnHistory;
use App\Models\History;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HistoryController extends Controller
{
    public function index(){
        $data = History::latest()->get();
        return view('backend.history.list',compact('data'));
    }

    public function create(){
        return view('backend.history.add');
    }

    public function store(Request $request){
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

        Alert::success('Tarihçe Başarıyla Eklendi');
        return redirect()->route('admin.history.list');
    }

    public function edit($id){
        $data_tr = History::findOrFail($id);
        $data_en = EnHistory::where('history_id',$id)->first();
        return view('backend.history.edit',compact('data_tr','data_en'));
    }

    public function update(Request $request,$id){
        $history = History::find($id);
        $history->title = $request->title_tr;
        $history->year = $request->year_tr;
        $history->description = $request->description_tr;
        $history->save();

        $history_en = EnHistory::where('history_id',$id)->first();
        $history_en->title = $request->title_en;
        $history_en->year = $request->year_en;
        $history_en->description = $request->description_en;
        $history_en->history_id = $history->id;
        $history_en->save();

        Alert::success('Tarihçe Başarıyla Eklendi');
        return redirect()->route('admin.history.list');
    }

    public function destroy($id){
        $data = History::findOrFail($id);
        EnHistory::where('history_id',$id)->delete();
        $data->delete();
        Alert::success('Tarihçe Başarıyla Silindi');
        return redirect()->route('admin.history.list');
    }
}
