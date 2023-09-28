<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EnSlider;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Throwable;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Slider::orderBy('queue','asc')->get();
        return view('backend.slider.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.slider.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            "add_slider_title_tr" => "required",
            "add_slider_sub_description_tr" => "required",
            "add_slider_btn_text_tr" => "required",
            "add_slider_btn_url_tr" => "required",
            "add_slider_no_tr" => "required",
            "add_slider_title_en" => "required",
            "add_slider_sub_description_en" => "required",
            "add_slider_btn_text_en" => "required",
            "add_slider_btn_url_en" => "required",
            "add_slider_no_en" => "required",
            "image" => "required",
        ]);


            $slider = new Slider();
            $slider->title = $request->add_slider_title_tr;
            $slider->description = $request->add_slider_sub_description_tr;
            $slider->button_title = $request->add_slider_btn_text_tr;
            $slider->button_link = $request->add_slider_btn_url_tr;
            $slider->queue = $request->add_slider_no_tr;
            if (!isset($request->allowadd_slider_tr)) {
                $slider->status = 0;
            }
            if ($request->file('image') != null) {
                $image = $request->file('image');
                $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $save_url = "assets/uploads/slider/" . $image_name;
                Image::make($image)->resize(2440, 1570)->save($save_url);
                $slider->image = $save_url;
            }
            $slider->save();

            $slider_en = new EnSlider();
            $slider_en->title = $request->add_slider_title_en;
            $slider_en->description = $request->add_slider_sub_description_en;
            $slider_en->button_title = $request->add_slider_btn_text_en;
            $slider_en->slider_id = $slider->id;
            $slider_en->button_link = $request->add_slider_btn_url_en;
            $slider_en->queue = $request->add_slider_no_en;
            if (!isset($request->allowadd_slider_en)) {
                $slider_en->status = 0;
            }
            $slider_en->save();


            logKayit(['Slider', 'Slider başarıyla eklendi']);
            Alert::success('Slider Başarıyla Eklendi');

            DB::commit();

        return redirect()->route('admin.slider.list');
    }

    public function edit($id)
    {
        $data_tr = Slider::findOrFail($id);
        $data_en = EnSlider::where('slider_id', $id)->first();
        return view('backend.slider.edit', compact('data_tr', 'data_en'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            "add_slider_title_tr" => "required",
            "add_slider_sub_description_tr" => "required",
            "add_slider_btn_text_tr" => "required",
            "add_slider_btn_url_tr" => "required",
            "add_slider_no_tr" => "required",
            "add_slider_title_en" => "required",
            "add_slider_sub_description_en" => "required",
            "add_slider_btn_text_en" => "required",
            "add_slider_btn_url_en" => "required",
            "add_slider_no_en" => "required",
            "image" => "required",
        ]);
        try {
            DB::beginTransaction();

            $slider = Slider::findOrFail($id);
            $slider->title = $request->add_slider_title_tr;
            $slider->description = $request->add_slider_sub_description_tr;
            $slider->button_title = $request->add_slider_btn_text_tr;
            $slider->button_link = $request->add_slider_btn_url_tr;
            $slider->queue = $request->add_slider_no_tr;
            if (!isset($request->allowadd_slider_tr)) {
                $slider->status = 0;
            }
            if ($request->file('image') != null) {
                $image = $request->file('image');
                $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $save_url = "assets/uploads/slider" . $image_name;
                Image::make($image)->size(2440, 1570)->save($save_url);
                $slider->image = $save_url;
            }
            $slider->save();

            $slider_en = EnSlider::where('slider_id', $id)->first();
            $slider_en->title = $request->add_slider_title_en;
            $slider_en->description = $request->add_slider_sub_description_en;
            $slider_en->button_title = $request->add_slider_btn_text_en;
            $slider_en->button_link = $request->add_slider_btn_url_en;
            $slider_en->queue = $request->add_slider_no_en;
            $slider_en->save();
            if (!isset($request->allowadd_slider_en)) {
                $slider_en->status = 0;
            }
            logKayit(['Slider', 'Slider başarıyla eklendi']);
            Alert::success('Slider Başarıyla Eklendi');
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();

            logKayit(['Slider', 'Slider Düzenlemede hata',0]);
            Alert::error('Slider Eklemede Hata');
            return redirect()->back();
        }
        return redirect()->route('admin.slider.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $data = Slider::findOrFail($id);
            EnSlider::where('slider_id', $id)->delete();
            $data->delete();
            logKayit(['Slider', 'Slider başarıyla silindi']);
            Alert::success('Slider Başarıyla Silindi');
            DB::commit();
        } catch (Throwable $e) {
            logKayit(['Slider', 'Slider eklemede hata']);
            DB::rollBack();
            Alert::error('Slider Eklemede Hata');
            return redirect()->back();
        }
        return redirect()->route('admin.slider.list');
    }

    public function status_change($id){

        $data = Slider::findOrFail($id);
        $data_en = EnSlider::where('slider_id',$id)->first();
        $data->status = !$data->status;
        $data_en->status = $data->status;
        $data->save();
        $data_en->save();

        Alert::success('Slider Statüsü Değiştirildi');
        return redirect()->route('admin.slider.list');

    }

  
}
