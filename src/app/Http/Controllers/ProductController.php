<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 商品一覧（ログアウト状態）￥表示
    public function indexGuest(){
        return view('');
    }

    // 商品一覧（ログイン状態）￥表示
    public function index(){
        return view('');
    }

    // 商品詳細￥表示
    public function show(){
        return view('');
    }

    // 商品購入画面￥表示
    public function purchaseForm(){
        return view('');
    }

    // 商品出品￥表示
    public function create(){
        return view('');
    }
    
    // 商品出品￥実行
    public function store(){
        return redirect('');
    }
}

