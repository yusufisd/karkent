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
        $data = Slider::orderBy('queue', 'asc')->get();
        return view('backend.slider.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Slider::latest()->first() != null) {
            $no = Slider::latest()->first()->queue + 1;
        } else {
            $no = 1;
        }
        return view('backend.slider.add', compact('no'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'add_slider_title_tr' => 'required',
                'add_slider_sub_description_tr' => 'required',
                'add_slider_btn_text_tr' => 'required',
                'add_slider_btn_url_tr' => 'required',
                'add_slider_no_tr' => 'required',
                'add_slider_title_en' => 'required',
                'add_slider_sub_description_en' => 'required',
                'add_slider_btn_text_en' => 'required',
                'add_slider_btn_url_en' => 'required',
                'add_slider_no_en' => 'required',
            ],
            [
                'add_slider_title_tr.required' => 'Slider (TÜRKÇE) başlık boş bırakılamaz.',
                'add_slider_sub_description_tr.required' => 'Slider açıklama (TÜRKÇE) boş bırakılamaz.',
                'add_slider_btn_text_tr.required' => 'Slider buton başlığı (TÜRKÇE) boş bırakılamaz.',
                'add_slider_btn_url_tr.required' => 'Slider buton URL (TÜRKÇE) boş bırakılamaz.',
                'add_slider_no_tr.required' => 'Slider sıralaması (TÜRKÇE) boş bırakılamaz.',
                'add_slider_title_en.required' => 'Slider başlık (İNGİLİZCE) boş bırakılamaz.',
                'add_slider_sub_description_en.required' => 'Slider açıklama (İNGİLİZCE) boş bırakılamaz.',
                'add_slider_btn_text_en.required' => 'Slider buton başlığı (İNGİLİZCE) boş bırakılamaz.',
                'add_slider_btn_url_en.required' => 'Slider buton URL (İNGİLİZCE) boş bırakılamaz.',
                'add_slider_no_en.required' => 'Slider sıralaması (İNGİLİZCE) boş bırakılamaz.',
            ],
        );

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
            $save_url = 'assets/uploads/slider/' . $image_name;
            Image::make($image)
                ->resize(2440, 1570)
                ->save($save_url);
            $slider->image = $save_url;
        }
        $slider->save();

        $slider_en = new EnSlider();
        if ($request->file('image') != null) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $save_url = 'assets/uploads/slider/' . $image_name;
            Image::make($image)
                ->resize(2440, 1570)
                ->save($save_url);
            $slider_en->image = $save_url;
        }
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
        $request->validate(
            [
                'add_slider_title_tr' => 'required',
                'add_slider_sub_description_tr' => 'required',
                'add_slider_btn_text_tr' => 'required',
                'add_slider_btn_url_tr' => 'required',
                'add_slider_no_tr' => 'required',
                'add_slider_title_en' => 'required',
                'add_slider_sub_description_en' => 'required',
                'add_slider_btn_text_en' => 'required',
                'add_slider_btn_url_en' => 'required',
                'add_slider_no_en' => 'required',
            ],
            [
                'add_slider_title_tr.required' => 'Slider (TÜRKÇE) başlık boş bırakılamaz.',
                'add_slider_sub_description_tr.required' => 'Slider açıklama (TÜRKÇE) boş bırakılamaz.',
                'add_slider_btn_text_tr.required' => 'Slider buton başlığı (TÜRKÇE) boş bırakılamaz.',
                'add_slider_btn_url_tr.required' => 'Slider buton URL (TÜRKÇE) boş bırakılamaz.',
                'add_slider_no_tr.required' => 'Slider sıralaması (TÜRKÇE) boş bırakılamaz.',
                'add_slider_title_en.required' => 'Slider başlık (İNGİLİZCE) boş bırakılamaz.',
                'add_slider_sub_description_en.required' => 'Slider açıklama (İNGİLİZCE) boş bırakılamaz.',
                'add_slider_btn_text_en.required' => 'Slider buton başlığı (İNGİLİZCE) boş bırakılamaz.',
                'add_slider_btn_url_en.required' => 'Slider buton URL (İNGİLİZCE) boş bırakılamaz.',
                'add_slider_no_en.required' => 'Slider sıralaması (İNGİLİZCE) boş bırakılamaz.',
            ],
        );

        $slider = Slider::findOrFail($id);
        $slider->title = $request->add_slider_title_tr;
        $slider->description = $request->add_slider_sub_description_tr;
        $slider->button_title = $request->add_slider_btn_text_tr;
        $slider->button_link = $request->add_slider_btn_url_tr;
        if (!isset($request->allowadd_slider_tr)) {
            $slider->status = 0;
        }
        if ($request->file('image') != null) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $save_url = 'assets/uploads/slider' . $image_name;
            Image::make($image)
                ->size(2440, 1570)
                ->save($save_url);
            $slider->image = $save_url;
        }
        if ($request->add_slider_no_tr < $slider->queue) {
            for ($i = $request->add_slider_no_tr; $i < $slider->queue; $i++) {
                $data = Slider::where('queue', $i)->first();
                if ($data != null) {
                    $data->update([
                        'queue' => $data->queue + 1,
                    ]);
                }
            }
            $slider->queue = $request->add_slider_no_tr;
        }
        if ($request->add_slider_no_tr > $slider->queue) {
            for ($i = $request->add_slider_no_tr; $i > $slider->queue; $i--) {
                $data = Slider::where('queue', $i)->first();
                if ($data != null) {
                    $data->update([
                        'queue' => $data->queue - 1,
                    ]);
                }
            }
            $slider->queue = $request->add_slider_no_tr;
        }
        $slider->save();

        $slider_en = EnSlider::where('slider_id', $id)->first();
        $slider_en->title = $request->add_slider_title_en;
        $slider_en->description = $request->add_slider_sub_description_en;
        $slider_en->button_title = $request->add_slider_btn_text_en;
        $slider_en->button_link = $request->add_slider_btn_url_en;
        $slider_en->queue = $request->add_slider_no_en;
        if ($request->file('image') != null) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $save_url = 'assets/uploads/slider' . $image_name;
            Image::make($image)
                ->size(2440, 1570)
                ->save($save_url);
            $slider_en->image = $save_url;
        }
        if (!isset($request->allowadd_slider_en)) {
            $slider_en->status = 0;
        }
        if ($request->add_slider_no_tr < $slider_en->queue) {
            for ($i = $request->add_slider_no_tr; $i < $slider_en->queue; $i++) {
                $data = EnSlider::where('queue', $i)->first();
                if ($data != null) {
                    $data->update([
                        'queue' => $data->queue + 1,
                    ]);
                }
            }
            $slider_en->queue = $request->add_slider_no_tr;
        }
        if ($request->add_slider_no_tr > $slider_en->queue) {
            for ($i = $request->add_slider_no_tr; $i > $slider_en->queue; $i--) {
                $data = EnSlider::where('queue', $i)->first();
                if ($data != null) {
                    $data->update([
                        'queue' => $data->queue - 1,
                    ]);
                }
            }
            $slider_en->queue = $request->add_slider_no_tr;
        }
        $slider_en->save();

        if ($slider && $slider_en) {
            logKayit(['Slider', 'Slider başarıyla güncellendi']);
            Alert::success('Slider Başarıyla Güncellendi');
            return redirect()->route('admin.slider.list');
        } else {
            logKayit(['Slider', 'Slider güncellemede hata', 0]);
            Alert::success('Slider Güncellenirken Hata Oluştu');
            return redirect()->route('admin.slider.list');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $data = Slider::findOrFail($id);
            $son = Slider::orderBy('queue', 'desc')->first();
            for ($i = $id + 1; $i <= $son->queue; $i++) {
                $var = Slider::where('queue', $i)->first();
                if ($var != null) {
                    $var->queue = $var->queue - 1;
                    $var->save();
                }
            }

            EnSlider::where('slider_id', $id)->delete();
            $data->delete();
            logKayit(['Slider', 'Slider başarıyla silindi']);
            Alert::success('Slider Başarıyla Silindi');
            DB::commit();
        } catch (Throwable $e) {
            logKayit(['Slider', 'Slider Silmede hata']);
            DB::rollBack();
            Alert::error('Slider Silmede Hata');
            return redirect()->back();
        }
        return redirect()->route('admin.slider.list');
    }

    public function status_change($id)
    {
        $data = Slider::findOrFail($id);
        $data_en = EnSlider::where('slider_id', $id)->first();
        $data->status = !$data->status;
        $data_en->status = $data->status;
        $data->save();
        $data_en->save();

        Alert::success('Slider Statüsü Değiştirildi');
        return redirect()->route('admin.slider.list');
    }
}
