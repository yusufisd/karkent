<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            "username" => "Admin",
            "email" => "admin@karkent.com",
            "password" => Hash::make('123123')
        ]);

        $role = Role::create([
            'guard_name' => 'admin',
            "name" => 'admin',
        ]);

        $dizi = [
            ["name" => "slider_list"],
            ["name" => "slider_edit"],
            ["name" => "slider_add"],
            ["name" => "slider_delete"],
            ["name" => "sponsor_list"],
            ["name" => "sponsor_edit"],
            ["name" => "sponsor_add"],
            ["name" => "sponsor_delete"],
            ["name" => "history_list"],
            ["name" => "history_edit"],
            ["name" => "history_add"],
            ["name" => "history_delete"],
            ["name" => "page_defi_1_list"],
            ["name" => "page_defi_1_edit"],
            ["name" => "page_defi_1_add"],
            ["name" => "page_defi_1_delete"],
        ];

        foreach ($dizi as $key => $value) {
            $permission = Permission::create([
                "name" => $value["name"],
                "guard_name" => "admin"
            ]);
            $role->givePermissionTo($permission);
        }

        $user = Admin::find(1);
        $user->assignRole($role);
    }
}
