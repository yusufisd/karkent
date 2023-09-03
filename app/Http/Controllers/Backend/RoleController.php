<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Roller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    public function list()
    {
        $data = Roller::latest()->get();
        return view('backend.roles.list', compact('data'));
    }

    public function add()
    {
        return view('backend.roles.add');
    }

    public function store(Request $request)
    {
        
        $role = new Roller();
        $role->rol_adi = $request->role_name;
        $role->yetkinlikler = $request->test;
        $role->save();

        Alert::success('Rol Başarıyla Eklendi');
        return redirect()->route('admin.role.list');
    }
}
