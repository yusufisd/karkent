<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\LoginLog;
use App\Models\Logs;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function list(){
        $logs = Logs::latest()->get();
        $loginLogs = LoginLog::latest()->get();
        return view('backend.log.list',compact('logs','loginLogs'));
    }
}
