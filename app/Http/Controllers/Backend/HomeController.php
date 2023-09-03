<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\LoginLog;
use App\Models\Logs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $logs = Logs::latest()->get();
        $loginLogs = LoginLog::latest()->take(7)->get();
        return view('backend.index',compact('logs','loginLogs'));
    }
}
