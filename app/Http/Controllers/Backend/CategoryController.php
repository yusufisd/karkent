<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\EnCategory;
use App\Models\EnContact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function create()
    {
        return view('backend.category.add');
    }

    public function index()
    {
        $data = Category::latest()->get();
        return view('backend.category.list', compact('data'));
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->title = $request->name_tr;
        $category->save();

        $category_en = new EnCategory();
        $category_en->title = $request->name_en;
        $category_en->cateogry_id = $category->id;
        $category_en->save();

        Alert::success('Kategori Ekleme Başarılı');
        return redirect()->route('admin.category.list');
    }

    public function edit($id)
    {
        $data_tr = Category::findOrFail($id);
        $data_en = EnCategory::where('category_id', $id)->first();
        return view('backend.category.edit', compact('data_tr', 'data_en'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->title = $request->name_tr;
        $category->save();

        $category_en = EnCategory::where('category_id', $id)->first();
        $category_en->title = $request->name_en;
        $category_en->cateogry_id = $category->id;
        $category_en->save();

        Alert::success('Kategori Düzenleme Başarılı');
        return redirect()->route('admin.category.list');
    }

    public function destroy($id)
    {
        $data = Category::findOrFail($id);
        EnCategory::where('category_id', $id)->delete();
        $data->delete();
        Alert::success('Kategori Silme Başarılı');
        return redirect()->route('admin.category.list');
    }
}
