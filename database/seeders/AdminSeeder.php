<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Roller;
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
        $dizi = [
            ["name" => "slider_show"],
            ["name" => "slider_edit"],
            ["name" => "slider_add"],
            ["name" => "slider_delete"],
            ["name" => "sponsor_show"],
            ["name" => "sponsor_edit"],
            ["name" => "sponsor_add"],
            ["name" => "sponsor_delete"],
            ["name" => "history_show"],
            ["name" => "history_edit"],
            ["name" => "history_add"],
            ["name" => "history_delete"],
            ["name" => "page_defi_1_add"],
            ["name" => "about_add"],
            ["name" => "contact_add"],
            ["name" => "category_show"],
            ["name" => "category_edit"],
            ["name" => "category_add"],
            ["name" => "category_delete"],
            ["name" => "product_show"],
            ["name" => "product_edit"],
            ["name" => "product_add"],
            ["name" => "product_delete"],
        ];

        $role = new Roller();
        $role->rol_adi = 'admin';
        $role->yetkinlikler = $dizi;
        $role->save();

        Admin::create([
            "name" => "Karkent",
            "surname" => "Admin",
            "email" => "admin@karkent.com",
            "phone" => "4446298",
            "role_id" => 1,
            "password" => Hash::make('123123')
        ]);
    }
}
