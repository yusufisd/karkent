<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPasswordMail;
use App\Models\Admin;
use App\Models\LoginLog;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend.login');
    }

    public function login_post(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email boş bırakılamaz!',
                'email.email' => 'Email tipi yanlış!',
                'password.required' => 'Şifre boş bırakılamaz!',
            ],
        );

        if (Admin::where('email', $request->email)->first() != null) {
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
                $auth = Auth::guard('admin')->user();
                LoginLog::create([
                    'user' => $auth->name . ' ' . $auth->surname,
                    'description' => 'Başarılı Giriş',
                ]);
                return redirect()->route('admin.index');
            } else {
                $auth = Admin::where('email', $request->email)->first();
                LoginLog::create([
                    'user' => $auth->name . ' ' . $auth->surname,
                    'description' => 'Başarısız Giriş',
                    'success' => 0,
                ]);
                return back()->withErrors('Email veya şifre yanlış');
            }
        } elseif (UserModel::where('email', $request->email)->first() != null) {
            if (Auth::guard('user_model')->attempt(['email' => $request->email, 'password' => $request->password])) {
                $auth = Auth::guard('user_model')->user();
                LoginLog::create([
                    'user' => $auth->name . ' ' . $auth->surname,
                    'description' => 'Başarılı Giriş',
                ]);
                return redirect()->route('admin.index');
            } else {
                $auth = UserModel::where('email', $request->email)->first();
                LoginLog::create([
                    'user' => $auth->name . ' ' . $auth->surname,
                    'description' => 'Başarısız Giriş',
                    'success' => 0,
                ]);
                return back()->withErrors('Email veya şifre yanlış');
            }
        } else {
            return back()->withErrors('Böyle bir kullanıcı yok');
        }
    }

    public function logout()
    {
        if (Auth::guard('user_model')->user()) {
            Auth::guard('user_model')->logout();
        } else {
            Auth::guard('admin')->logout();
        }

        return redirect()->route('admin.login');
    }

    public function forgotPassword()
    {
        return view('backend.auth.forgot_password');
    }

    public function forgotPasswordPost(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
            ],
            [
                'email.required' => 'Email alanı boş gönderilemez.',
                'email.email' => 'Email formatı doğru girilmedi.',
            ],
        );

        $user = UserModel::where('email', $request->email)->first();
        if ($user != null) {
            Mail::to($user)->send(new ForgotPasswordMail($user));
            Alert::success('Mail Gönderildi', 'Şifre yenileme linki mail adresinize gönderildi.');
            return redirect()->route('admin.login');
        } else {
            return redirect()
                ->back()
                ->withErrors('Girilen email bulunamadı.');
        }
    }

    public function resetPassword($data)
    {
        return view('backend.auth.reset_password', compact('data'));
    }

    public function resetPasswordPost(Request $request)
    {
        $request->validate(
            [
                'password' => 'required',
                'password_confirm' => 'required|same:password',
            ],
            [
                'password.required' => 'Şifre boş bırakılamaz.',
                'password_confirm.required' => 'Şifre tekrarı boş bırakılamaz.',
                'password_confirm.same' => 'Şifreler uyuşmuyoe.',
            ],
        );

        UserModel::where('email', $request->email)->update([
            'password' => Hash::make($request->password),
        ]);

        Alert::success('Şifre Başarıyla Yenilendi');
        return redirect()->route('admin.login');
    }

    public function profile()
    {
        if (Auth::guard('user_model')->user() != null) {
            $auth = Auth::guard('user_model')->user();
        } else {
            $auth = Auth::guard('admin')->user();
        }
        return view('backend.auth.profile', compact('auth'));
    }

    public function profileUpdate(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'surname' => 'required',
                'email' => 'required',
                'phone' => 'required',
            ],
            [
                'name.required' => 'İsim boş bırakılamaz.',
                'surname.required' => 'Soy isim boş bırakılamaz.',
                'email.required' => 'Email boş bırakılamaz.',
                'phone.required' => 'Telefon boş bırakılamaz.',
            ],
        );

        if (Auth::guard('user_model')->user() != null) {
            UserModel::where('email', Auth::guard('user_model')->user()->email)->update([
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
        } else {
            Admin::where('email', Auth::guard('admin')->user()->email)->update([
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
        }

        Alert::success('Profil Düzenlendi');
        return back();
    }

    public function changePassword(){
        if(Auth::guard('user_model')->user() != null){
            $auth = Auth::guard('user_model')->user();
        }else{
            $auth = Auth::guard('admin')->user();
        }

        return view('backend.auth.changePassword',compact('auth'));
    }

    public function changePasswordPost(Request $request){
        $request->validate([
            "previous_password" => "required",
            "password" => "required",
            "password_confirm" => "required|same:password",
        ],[
            "previous_password.required" => "Mevcut şifre boş bırakılamaz.",
            "password.required" => "Şifre boş bırakılamaz.",
            "password_confirm.required" => "Şifre tekrarı boş bırakılamaz.",
            "password_confirm.same" => "Şifreler eşleşmiyor.",
        ]);

        if (Hash::check($request->previous_password, $request->auth_password)) {
            if(Auth::guard('user_model')->user() == null){
                Admin::where('email',$request->auth_email)->update([
                    "password" => Hash::make($request->password)
                ]);
            }if(Auth::guard('user_model')->user() == null){
                UserModel::where('email',$request->auth_email)->update([
                    "password" => Hash::make($request->password)
                ]);
            }

            Alert::success('Şifre Başarıyla Değiştirildi');
            return redirect()->route('admin.index');
        }
        else{
            Alert::error('Mevcut Şifre Yanlış Girildi');
            return back();
        }
    }
}
