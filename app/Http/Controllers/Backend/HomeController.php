<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\LoginLog;
use App\Models\Logs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::guard('user_model')->user() == null){
            if(Auth::guard('admin')->user() == null){
                return redirect()->route('admin.login');
            }
        }
         
        $logs = Logs::latest()->get();
        $loginLogs = LoginLog::latest()->take(7)->get();
        return view('backend.index',compact('logs','loginLogs'));
    }
}
