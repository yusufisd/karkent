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
        $queue = Product::orderBy('queue','desc')->first();
        return view('backend.product.add', compact('categories','queue'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'category_id' => 'required',
                'product_name_tr' => 'required',
                'product_description_tr' => 'required',
                'product_name_en' => 'required',
                'product_description_en' => 'required',
                'image' => 'required',
            ],
            [
                'category_id.required' => 'category_id',
                'product_name_tr.required' => 'product_name_tr',
                'product_description_tr.required' => 'product_description_tr',
                'product_name_en.required' => 'product_name_en',
                'product_description_en.required' => 'product_description_en',
                'image.required' => 'image',
            ],
        );

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->title = $request->product_name_tr;
        $product->description = $request->product_description_tr;
        $product->link = $request->product_url_tr;
        $product->type = $request->type;
        $product->queue = $request->queue;

        $image_tr = $request->file('image');
        $image_name = hexdec(uniqid()) . '.' . $image_tr->getClientOriginalExtension();
        $save_url = 'assets/uploads/product/' . $image_name;
        Image::make($image_tr)
            ->resize(360, 360)
            ->save($save_url);
        $product->image = $save_url;
        $product->save();

        $product_en = new EnProduct();
        $product_en->type = $request->type;
        $product_en->title = $request->product_name_en;
        $product_en->description = $request->product_description_en;
        $product_en->link = $request->product_url_en;
        $product_en->product_id = $product->id;
        $product_en->category_id = $request->category_id;
        $product_en->queue = $request->queue;
        $image_en = $request->file('image');
        $image_name_en = hexdec(uniqid()) . '.' . $image_en->getClientOriginalExtension();
        $save_url_en = 'assets/uploads/product/' . $image_name_en;
        Image::make($image_en)
            ->resize(360, 360)
            ->save($save_url_en);
        $product_en->image = $save_url;
        $product_en->save();

        if ($product && $product_en) {
            logKayit(['Ürün', 'Ürün Eklendi']);
            Alert::success('Ürün Ekleme İşlemi Başarılı');
            return redirect()->route('admin.product.list');
        } else {
            logKayit(['Ürün', 'Ürün Eklemede Hata', 0]);
            Alert::error('Ürün Eklemede Hata');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $categories = Category::latest()->get();

        $data_tr = Product::findOrFail($id);
        $data_en = EnProduct::where('product_id', $id)->first();
        return view('backend.product.edit', compact('data_tr', 'data_en', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'category_id' => 'required',
                'product_name_tr' => 'required',
                'product_description_tr' => 'required',
                'product_name_en' => 'required',
                'product_description_en' => 'required',
            ],
            [
                'category_id.required' => 'category_id',
                'product_name_tr.required' => 'product_name_tr',
                'product_description_tr.required' => 'product_description_tr',
                'product_name_en.required' => 'product_name_en',
                'product_description_en.required' => 'product_description_en',
            ],
        );

        try {
            DB::beginTransaction();

            $product = Product::findOrFail($id);
            $product->category_id = $request->category_id;
            $product->title = $request->product_name_tr;
            $product->description = $request->product_description_tr;
            $product->link = $request->product_url_tr;
            $product->type = $request->type;
            $product->queue = $request->queue;

            if ($request->file('image') != null) {
                $image_tr = $request->file('image');
                $image_name = hexdec(uniqid()) . '.' . $image_tr->getClientOriginalExtension();
                $save_url = 'assets/uploads/product/' . $image_name;
                Image::make($image_tr)
                    ->resize(360, 360)
                    ->save($save_url);
                $product->image = $save_url;
            }
            $product->save();

            $product_en = EnProduct::where('product_id',$id)->first();
            $product_en->type = $request->type;
            $product_en->category_id = $request->category_id;
            $product_en->title = $request->product_name_en;
            $product_en->description = $request->product_description_en;
            $product_en->link = $request->product_url_en;
            $product_en->product_id = $product->id;
            $product_en->queue = $request->queue;
            if ($request->file('image') != null) {
                $image_en = $request->file('image');
                $image_name_en = hexdec(uniqid()) . '.' . $image_en->getClientOriginalExtension();
                $save_url_en = 'assets/uploads/product/' . $image_name_en;
                Image::make($image_en)
                    ->resize(360, 360)
                    ->save($save_url_en);
                $product_en->image = $save_url;
            }
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
