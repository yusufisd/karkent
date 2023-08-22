<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    public function list()
    {
        $data = Role::latest()->get();
        return view('backend.roles.list');
    }

    public function add()
    {
        return view('backend.roles.add');
    }

    public function store(Request $request)
    {
        $role = Role::create([
            'guard_name' => 'web',
            "name" => strtolower($request->role_name),
        ]);

        $sections = [
            "show",
            "add",
            "edit",
            "delete",
        ];

        foreach ($sections as $val) {
            $name = "page_defi_1_" . $val;
            if (($request->$name != null)) {
                $permission = Permission::create([
                    "name" => $name,
                    'guard_name' => 'web'
                ]);
                $role->givePermissionTo($permission);
            }
        }

        foreach ($sections as $val) {
            $name = "slider_" . $val;
            if ($request->$name != null) {
                $permission = Permission::create([
                    "name" => $name,
                    "guard_name" => 'web'
                ]);
                $role->givePermissionTo($permission);
            }
        }

        foreach ($sections as $val) {
            $name = "sponsor_" . $val;
            if ($request->$name != null) {
                $permission = Permission::create([
                    "name" => $name,
                    "guard_name" => 'web'
                ]);
                $role->givePermissionTo($permission);
            }
        }

        foreach ($sections as $val) {
            $name = "history_" . $val;
            if ($request->$name != null) {
                $permission = Permission::create([
                    "name" => $name,
                    "guard_name" => 'web'
                ]);
                $role->givePermissionTo($permission);
            }
        }

        Alert::success('Rol Başarıyla Eklendi');
        return redirect()->route('admin.role.list');
    }
}
