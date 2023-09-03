<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\EnProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Throwable;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::latest()->get();
        return view('backend.product.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('backend.product.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                "category_id" => "required",
                "product_name_tr" => "required",
                "product_description_tr" => "required",
                "product_url_tr" => "required",
                "product_name_en" => "required",
                "product_description_en" => "required",
                "product_url_en" => "required",
                "image" => "required",
            ]);
            $product = new Product();
            $product->category_id = $request->category_id;
            $product->title = $request->product_name_tr;
            $product->description = $request->product_description_tr;
            $product->link = $request->product_url_tr;

            $image_tr = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image_tr->getClientOriginalExtension();
            $save_url = 'assets/uploads/product/' . $image_name;
            Image::make($image_tr)->resize(360, 360)->save($save_url);
            $product->image = $save_url;
            $product->save();

            $product_en = new EnProduct();
            $product_en->title = $request->product_name_en;
            $product_en->description = $request->product_description_en;
            $product_en->link = $request->product_url_en;
            $product_en->product_id = $product->id;
            $product_en->save();


            logKayit(['Ürün', 'Ürün Eklendi']);
            Alert::success('Ürün Ekleme İşlemi Başarılı');
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            logKayit(['Ürün', 'Ürün Eklemede Hata', 0]);
            Alert::error('Ürün Eklemede Hata');
            return redirect()->back();
        }
        return redirect()->route('admin.product.list');
    }


    public function edit($id)
    {
        $data_tr = Product::findOrFail($id);
        $data_en = EnProduct::where('product_id', $id)->first();
        return view('backend.product.edit', compact('data_tr', 'data_en'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $request->validate([
                "category_id" => "required",
                "product_name_tr" => "required",
                "product_description_tr" => "required",
                "product_url_tr" => "required",
                "product_name_en" => "required",
                "product_description_en" => "required",
                "product_url_en" => "required",
                "image" => "required",
            ]);
            $product = Product::findOrFail($id);
            $product->category_id = $request->category_id;
            $product->title = $request->product_name_tr;
            $product->description = $request->product_description_tr;
            $product->link = $request->product_url_tr;

            $image_tr = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image_tr->getClientOriginalExtension();
            $save_url = 'assets/uploads/product/' . $image_name;
            Image::make($image_tr)->resize(360, 360)->save($save_url);
            $product->image = $save_url;
            $product->save();

            $product_en = EnProduct::where('product_id')->get();
            $product_en->title = $request->product_name_en;
            $product_en->description = $request->product_description_en;
            $product_en->link = $request->product_url_en;
            $product_en->product_id = $product->id;
            $product_en->save();
            logKayit(['Ürün', 'Ürün Düzenlendi']);
            Alert::success('Ürün Güncelleme İşlemi Başarılı');
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            logKayit(['Ürün', 'Ürün Düzenlemede Hata', 0]);
            Alert::error('Ürün Düzenlemede Hata');
            return redirect()->back();
        }
        return redirect()->route('admin.product.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            DB::beginTransaction();
        $data = Product::findOrFail($id);
        EnProduct::where('product_id', $id)->delete();
        $data->delete();
        logKayit(['Ürün', 'Ürün Silindi']);
        Alert::success('Ürün Silme İşlemi Başarılı');
        DB::commit();
    } catch (Throwable $e) {
        DB::rollBack();
        logKayit(['Ürün', 'Ürün Silmede Hata', 0]);
        Alert::error('Ürün Silmede Hata');
        return redirect()->back();
    }
        return redirect()->route('admin.product.list');
    }
}
