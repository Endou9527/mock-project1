<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ExhibitionRequest;
use App\Models\Category;
use App\Models\Status;
use App\Models\Purchase;
use App\Models\Product;


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
    public function purchaseForm($item_id){
        $product = Product::findOrFail($item_id);
        $user = auth()->user();

        return view('purchase', compact('product', 'user'));
    }

    // 商品購入￥実行
    public function purchase(Request $request, $item_id){
        $user = $request->user();

        Purchase::create([
        'user_id'    => auth()->id(),
        'product_id' => $item_id,
        'payment'    => $request->payment,
        ]);
        
        return redirect('/mypage?page=buy');
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

        return redirect('/?tab=mylist');
    }
}

