<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExhibitionRequest;
use App\Models\Category;
use App\Models\Status;

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
        $categories = Category::all();
        $statuses = Status::all();

        return view('sell',compact('categories','statuses'));
    }

    // 商品出品￥実行
    public function store(ExhibitionRequest $request){
        $product = $request->user()->products()->create([
            'name' => $request->name,
            'brand' => $request->brand,
            'image' => $request->file('image')->store('products','public'),
            'price' => $request->price,
            'description' => $request->description,
            'status_id' => $request->status_id,
        ]);
        $product->categories()->sync($request->categories);

        return redirect()->route('top');
    }
}

