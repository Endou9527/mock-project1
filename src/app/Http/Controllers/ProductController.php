<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 商品一覧（ログイン状態）￥表示
    public function index(){
        return view('index');
    }
    // 商品詳細￥表示
    public function (){
        return view('');
    }
    // 商品購入画面￥表示
    public function (){
        return view('');
    }
    // 商品出品￥表示
    public function (){
        return view('');
    }
    // 購入した商品一覧￥表示
    public function (){
        return view('');
    }
    // 出品した商品一覧￥表示
    public function (){
        return view('');
    }
}
