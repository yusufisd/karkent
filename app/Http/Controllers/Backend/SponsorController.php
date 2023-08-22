<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function add(){
        return view('backend.sponsor.add');
    }

    public function list(){
        $data = Sponsor::latest()->get();
        return view('backend.sponsor.list',compact('data'));
    }
}
