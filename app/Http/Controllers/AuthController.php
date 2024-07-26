<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ConfirmRegister;
use App\Mail\ForgotPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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

    public function forgot()
    {
        return view('frontend.forgot');
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

        $user = User::where('email', $request->email)->first();

        if (isset($user->remember_token) && $user->remember_token != null) {
            return redirect()->route('login')->with('errors', 'Tài khoản chưa được xác nhận');
        } else {

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {

                if (Auth::user()->is_admin) {
                    return redirect()->route('dashboard')->with('success', 'Đăng nhập thành công!');
                } else {
                    return redirect()->route('home')->with('success', 'Đăng nhập thành công!');
                }
            } else {
                return redirect()->route('login')->with('errors', 'Đăng nhập thất bại');
            }
        }
    }

    /**
     * Write code on Method
     *
     *
     */
    public function postRegistration(Request $request)
    {
        // dd($request->all());

        if ($request->password === $request->repassword) {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'remember_token' => $request->_token,
                'email_verified_at' => now()
            ]);

            $confirmationUrl = route('confirmation', ['token' => $user->remember_token]);

            Mail::to($user->email)->send(new ConfirmRegister($confirmationUrl));

            // $credentials = $request->only('email', 'password');

            // if (Auth::attempt($credentials)) {
            //     return redirect()->route('home')->withSuccess('Đăng ký thành công.');
            // }

            return redirect()->back()->withSuccess('Vui lòng kiểm tra Email của bạn để xác nhận đăng ký.');
        } else {
            return redirect()->back()->with('errors', 'Mật khẩu không khớp.');
        }
    }


    public function postForgot(Request $request)
    {

        $user = User::where('email', $request->email)->firstOrFail();

        if (isset($user)) {

            $user->update(['remember_token' => $request->_token]);

            $resetPasswordUrl = route('resetpassword', ['token' => $user->remember_token]);
            Mail::to($request->email)->send(new ForgotPassword($resetPasswordUrl));

            return redirect()->back()->withSuccess('Vui lòng kiểm tra Email của bạn để đặt lại mật khẩu.');
        } else {
            return redirect()->back()->with('errors', 'Tài khoản không tồn tại.');
        }
    }


    public function confirmRegistration($token)
    {
        $user = User::where('remember_token', $token)->firstOrFail();
        $user->remember_token = null;
        $user->email_verified_at = now();
        $user->save();

        return redirect()->route('login')->withSuccess('Tài khoản đã được xác nhận, hãy đăng nhập.');
    }

    public function resetPassword($token)
    {
        $user = User::where('remember_token', $token)->firstOrFail();

        if (isset($user)) {
            return view('frontend.resetPassword', compact('token'));
        }
    }

    public function postResetPassword(Request $request, $token)
    {
        
        if ($request->password === $request->repassword) {
            
            $user = User::where('remember_token', $token)->firstOrFail();
    
            $user->update([
                'password' => Hash::make($request->password),
                'remember_token' => null,
                'email_verified_at' => now()
            ]);

            return redirect()->route('login')->withSuccess('Đổi mật khẩu thành công, hãy đăng nhập.');
        } else {
            return redirect()->back()->with('errors', 'Mật khẩu không khớp.');
        }
    }
    
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }
}
