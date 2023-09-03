<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Roller;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function list(){
        $data = UserModel::latest()->get();
        return view('backend.user_models.list',compact('data'));
    }

    public function add(){
        $roles = Roller::all();
        return view('backend.user_models.add',compact('roles'));
    }

    public function store(Request $request){
        $request->validate([
            "name" => "required",
            "surname" => "required",
            "email" => "required|email",
            "password" => "required",
            "password_confirm" => "required|same:password",
            "phone" => "required",
        ]);
        $user = new UserModel();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role_id = $request->role_id;
        $user->password = Hash::make($request->password);
        $user->save();

        Alert::success('Kullanıcı Başarıyla Eklendi');
        return redirect()->route('admin.user.list');
    }

    public function update(Request $request, $id){
        $request->validate([
            "name" => "required",
            "surname" => "required",
            "email" => "required|email",
            "phone" => "required",
        ]);
        $user = UserModel::findOrFail($id);
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role_id = $request->role_id;
        $user->save();

        Alert::success('Kullanıcı Başarıyla Eklendi');
        return redirect()->route('admin.user.list');
    }
}
