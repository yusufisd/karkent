<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\EnContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {

        $local = \Session::get('applocale');

        if ($local == null) {
            $local = config('app.fallback_locale');
        }

        if ($local == "tr") {
            $data = Contact::latest()->first();
        } elseif ($local == "en") {
            $data = EnContact::latest()->first();
        }
        return view('frontend.contact', compact('data'));
    }
}
