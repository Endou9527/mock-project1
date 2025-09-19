<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 商品一覧（ログアウト状態）￥表示
    public function indexGuest(){
        return view('top');
    }

    // 商品一覧（ログイン状態）￥表示
    public function index(){
        return view('top');
    }

    // 商品詳細￥表示
    public function show(){
        return view('detail');
    }

    // 商品購入画面￥表示
    public function purchaseForm(){
        return view('purchase');
    }

    // 商品購入￥実行
    public function purchase(){
        return redirect('');
    }

    // 商品出品￥表示
    public function create(){
        return view('sell');
    }

    // 商品出品￥実行
    public function store(){
        return redirect('top');
    }
}

