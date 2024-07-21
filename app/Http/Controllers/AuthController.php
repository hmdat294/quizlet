<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     *
     */
    public function index()
    {
        if (Auth::check()) {

            return redirect()->route("home");
        }
        return view('frontend.login');
    }

    public function register()
    {
        return view('frontend.register');
    }


    /**
     * Write code on Method
     *
     *
     */
    public function postLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // dd(Auth::user()->is_admin);
            if (Auth::user()->is_admin) {
                return redirect()->route('dashboard')->withSuccess('Đăng nhập thành công.');
            } else {
                return redirect()->route('home')->withSuccess('Đăng nhập thành công.');
            }
        }

        return redirect()->route('login')->withSuccess('Đăng nhập thất bại.');
    }

    /**
     * Write code on Method
     *
     *
     */
    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        if ($request->password == $request->repassword) {

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('home')->withSuccess('Đăng ký thành công.');
            }

            // return redirect()->route('home')->withSuccess('Tốt! Đăng ký thành công.');
        } else {
            return redirect('login')->withSuccess('Mật khẩu không khớp.');
        }
    }


    /**
     * Write code on Method
     *
     *
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }
}
