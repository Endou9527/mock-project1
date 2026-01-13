<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // メール認証画面誘導￥表示
    public function showEmailVerificationNotice(){
        return view('');
    }
    // // 会員登録￥実行
    // public function register(){

    //     return redirect('');
    // }
    // ログイン￥実行
    public function login(){
        return redirect('');
    }
    // 送付先住所変更画面￥表示
    public function editAddress($item_id){
        $user = auth()->user();
        return view('address' , compact('user','item_id'));
    }
    // 送付先住所変更￥実行
    public function updateAddress(){
        return redirect('');
    }
}
