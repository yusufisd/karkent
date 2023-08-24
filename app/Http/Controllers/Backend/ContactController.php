<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\EnContact;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{

    public function add(){
        return view('backend.contact.add');
    }

    public function store(Request $request){

        $contact = new Contact();
        $contact->center_address = $request->merkez_adres_tr;
        $contact->center_phone = $request->merkez_telefon_tr;
        $contact->center_email = $request->merkez_email_tr;
        $contact->factory_address = $request->fabrika_adres_tr;
        $contact->factory_phone = $request->fabrika_telefon_tr;
        $contact->factory_email = $request->fabrik_email_tr;
        $contact->museum_address = $request->muze_adres_tr;
        $contact->museum_phone = $request->muze_telefon_tr;
        $contact->museum_email = $request->muze_email_tr;
        
        $center_image = $request->file('center_image');
        $center_image_name = hexdec(uniqid()).'.'.$center_image->getClientOriginalExtension();
        $save_url_center = "assets/uploads/contact/".$center_image_name;
        Image::make($center_image)->resize(460,345)->save($save_url_center);
        $contact->center_photo = $save_url_center;

        $factory_image = $request->file('factory_image');
        $factory_image_name = hexdec(uniqid()).'.'.$factory_image->getClientOriginalExtension();
        $save_url_factory = "assets/uploads/contact/".$factory_image_name;
        Image::make($factory_image)->resize(460,345)->save($save_url_factory);
        $contact->factory_photo = $save_url_factory;

        $museum_image = $request->file('museum_image');
        $museum_image_name = hexdec(uniqid()).'.'.$museum_image->getClientOriginalExtension();
        $save_url_museum = "assets/uploads/contact/".$museum_image_name;
        Image::make($museum_image)->resize(460,345)->save($save_url_museum);
        $contact->museum_photo = $save_url_museum;
        $contact->save();

        $contact_en = new EnContact();
        $contact_en->center_address = $request->merkez_adres_en;
        $contact_en->center_phone = $request->merkez_telefon_en;
        $contact_en->center_email = $request->merkez_email_en;
        $contact_en->factory_address = $request->fabrika_adres_en; 
        $contact_en->factory_phone = $request->fabrika_telefon_en;
        $contact_en->factory_email = $request->fabrika_email_en;
        $contact_en->museum_address = $request->muze_adres_en; 
        $contact_en->museum_phone = $request->muze_telefon_en;
        $contact_en->museum_email = $request->muze_email_en;
        $contact_en->save();

        Alert::success('İletişim Ayarları Başarıyla Güncellendi');
        return redirect()->back();
    }
}
