<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\EnCategory;
use App\Models\EnContact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Throwable;

class CategoryController extends Controller
{
    public function create()
    {
        if (Category::latest()->first() != null) {
            $no_tr = Category::orderBy('queue','desc')->first()->queue;
            $no_tr = $no_tr+1;
        } else {
            $no_tr = 1;
        }
        if (EnCategory::latest()->first() != null) {
            $no_en = EnCategory::orderBy('queue','desc')->first()->queue;
            $no_en = $no_en+1;

        } else {
            $no_en = 1;
        }
        return view('backend.category.add', compact('no_tr', 'no_en'));
    }

    public function index()
    {
        $data = Category::orderBy('queue', 'asc')->get();
        return view('backend.category.list', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name_tr' => 'required',
                'name_en' => 'required',
                'queue_tr' => 'required',
                'queue_en' => 'required',
            ],
            [
                'name_tr' => 'Türkçe başlık boş bırakıldı.',
                'name_en' => 'İngilizce başlık boş bırakıldı.',
                'queue_tr' => 'Türkçe sıralama boş bırakıldı.',
                'queue_en' => 'İngilizce sıralama boş bırakıldı.',
            ],
        );
        try {
            DB::beginTransaction();

            $category = new Category();
            $category->title = $request->name_tr;
            $category->queue = $request->queue_tr;
            if(!isset($request->allowadd_slider_tr)){
                $category->status = 0;
            }
            $category->save();

            $category_en = new EnCategory();
            $category_en->title = $request->name_en;
            $category_en->queue = $request->queue_en;
            $category_en->cateogry_id = $category->id;
            if(!isset($request->allowadd_slider_tr)){
                $category_en->status = 0;
            }
            $category_en->save();

            logKayit(['Kategori', 'Kategori Eklendi']);
            Alert::success('Kategori Ekleme Başarılı');
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            logKayit(['Kategori', 'Kategori Eklemede Hata', 0]);
            Alert::error('Kategori Eklemede Hata');
            return redirect()->back();
        }

        return redirect()->route('admin.category.list');
    }

    public function edit($id)
    {
        $data_tr = Category::findOrFail($id);
        $data_en = EnCategory::where('cateogry_id', $id)->first();
        return view('backend.category.edit', compact('data_tr', 'data_en'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name_tr' => 'required',
                'name_en' => 'required',
                'queue_tr' => 'required',
                'queue_en' => 'required',
            ],
            [
                'name_tr' => 'Türkçe başlık boş bırakıldı.',
                'name_en' => 'İngilizce başlık boş bırakıldı.',
                'queue_tr' => 'Türkçe sıralama boş bırakıldı.',
                'queue_en' => 'İngilizce sıralama boş bırakıldı.',
            ],
        );

        $category = Category::findOrFail($id);
        $category->title = $request->name_tr;
        if(!isset($request->allowadd_slider_tr)){
            $category->status = 0;
        }else{
            $category->status = 1;
        }
        if ($request->queue_tr < $category->queue) {
            for ($i = $request->queue_tr; $i < $category->queue; $i++) {
                $data = Category::where('queue', $i)->first();
                if ($data != null) {
                    $data->update([
                        'queue' => $data->queue + 1,
                    ]);
                }
            }
            $category->queue = $request->queue_tr;
        }
        if ($request->queue_tr > $category->queue) {
            for ($i = $request->queue_tr; $i > $category->queue; $i--) {
                $data = Category::where('queue', $i)->first();
                if ($data != null) {
                    $data->update([
                        'queue' => $data->queue - 1,
                    ]);
                }
            }
            $category->queue = $request->queue_tr;
        }
        $category->save();

        $category_en = EnCategory::where('cateogry_id', $id)->first();
        $category_en->title = $request->name_en;
        if(!isset($request->allowadd_slider_tr)){
            $category_en->status = 0;
        }else{
            $category_en->status = 1;
        }
        if ($request->queue_en < $category_en->queue) {
            for ($i = $request->queue_en; $i < $category_en->queue; $i++) {
                $data = EnCategory::where('queue', $i)->first();
                if ($data != null) {
                    $data->update([
                        'queue' => $data->queue + 1,
                    ]);
                }
            }
            $category_en->queue = $request->queue_en;
        }
        if ($request->queue_en > $category_en->queue) {
            for ($i = $request->queue_en; $i > $category_en->queue; $i--) {
                $data = EnCategory::where('queue', $i)->first();
                if ($data != null) {
                    $data->update([
                        'queue' => $data->queue - 1,
                    ]);
                }
            }
            $category_en->queue = $request->queue_en;
        }
        $category_en->cateogry_id = $category->id;
        $category_en->save();

        logKayit(['Kategori', 'Kategori Eklendi']);

        Alert::success('Kategori Düzenleme Başarılı');
        DB::commit();

        return redirect()->route('admin.category.list');
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $data_tr = Category::findOrFail($id);
            $data_en = EnCategory::where('cateogry_id', $id)->first();

            $son_tr = Category::orderBy('queue', 'desc')->first();
            $son_en = EnCategory::orderBy('queue', 'desc')->first();

            for ($i = $data_tr->queue + 1; $i <= $son_tr->queue; $i++) {
                $var = Category::where('queue', $i)->first();
                if ($var != null) {
                    $var->queue = $var->queue - 1;
                    $var->save();
                }
            }

            for ($i = $data_en->queue; $i <= $son_en->queue; $i++) {
                $vari = EnCategory::where('queue', $i)->first();
                if ($vari != null) {
                    $vari->queue = $vari->queue - 1;
                    $vari->save();
                }
            }
            $data_tr->delete();
            $data_en->delete();
            logKayit(['Kategori', 'Kategori Eklendi']);
            Alert::success('Kategori Silme Başarılı');
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            logKayit(['Kategori', 'Kategori Silmede Hata', 0]);
            Alert::error('Kategori Silmede Hata');
            return redirect()->back();
        }
        return redirect()->route('admin.category.list');
    }

    public function status_change($id)
    {
        $data = Category::findOrFail($id);
        $data_en = EnCategory::where('cateogry_id', $id)->first();
        $data->status = !$data->status;
        $data_en->status = $data->status;
        $data->save();
        $data_en->save();

        Alert::success('Kategori Statüsü Değiştirildi');
        return redirect()->route('admin.category.list');
    }
}
