<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddressRequest;

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

    // 送付先住所の変更￥表示
        public function editAddress($item_id){
        $user = auth()->user();

        return view('purchase.address', compact('user', 'item_id'));
    }

    // 送付先住所の変更(購入画面→「変更する」)￥実行
        public function updateAddress(AddressRequest $request, $item_id){
            $user = auth()->user();

            $user->update([
                'post_code' => $request->post_code,
                'address'   => $request->address,
                'building'  => $request->building,
            ]);

            // 購入画面に戻す（商品IDを保持）
            return redirect("/purchase/{$item_id}");
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
