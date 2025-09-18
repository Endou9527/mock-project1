<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // 会員登録画面￥表示
    public function showRegistrationForm(){
        return view('register');
    }

    // メール認証画面誘導￥表示
    public function showEmailVerificationNotice(){
        return view('');
    }
    // 会員登録￥実行
    public function register(){
        return redirect('');
    }
    // ログイン画面￥表示
    public function showLoginForm(){
        return view('login');
    }
    // ログイン￥実行
    public function login(){
        return redirect('');
    }
    // 送付先住所変更画面￥表示
    public function editAddress(){
        return view('address');
    }
    // 送付先住所変更￥実行
    public function updateAddress(){
        return redirect('');
    }
}
