<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // プロフィール画面￥表示
    public function showProfile(){
        return view('mypage');
    }

    // プロフィール編集画面￥表示
    public function editProfile(){
        return view('setting');
    }

    // プロフィール編集￥実行
    public function updateProfile(){
        return redirect('');
    }

    // 購入した商品一覧￥表示
    public function purchasedList(){
        return view('purchase');
    }
    
    // 出品した商品一覧￥表示
    public function soldList(){
        return view('sell');
    }
}
