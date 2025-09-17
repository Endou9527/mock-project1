<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 商品一覧（ログアウト状態）￥表示
Route::get('/', function () {
    return view('welcome');
});
// // 商品一覧（ログイン状態）￥表示
Route::get('/?tab=mylist',[Controller::class,'']);
// 会員登録画面￥表示
Route::get('/register',[Controller::class,'']);
// メール認証画面誘導￥表示
Route::get('/register/mail_setting',[Controller::class,'']);
// // 会員登録￥実行
Route::get('/store',[Controller::class,'']);
// ログイン画面￥表示
Route::get('/',[Controller::class,'']);
// // ログイン￥実行
Route::get('/',[Controller::class,'']);
// // 商品詳細￥表示
Route::get('/item/{item_id}',[Controller::class,'']);
// // 商品購入画面￥表示
Route::get('/purchase/{item_id}',[Controller::class,'']);
// // 送付先住所変更画面￥表示
Route::get('/purchase/address/i{tem_id}',[Controller::class,'']);
// // 送付先住所変更￥実行
Route::get('/',[Controller::class,'']);
// // 商品出品￥表示
Route::get('/sell',[Controller::class,'']);
// // プロフィール画面￥表示
Route::get('/mypage',[Controller::class,'']);
// // プロフィール編集画面￥表示
Route::get('/mypage/profile',[Controller::class,'']);
// // プロフィール編集￥実行
Route::get('',[Controller::class,'update']);
// // 購入した商品一覧￥表示
Route::get('/mypage?page=buy',[Controller::class,'']);
// // 出品した商品一覧￥表示
Route::get('/mypage?page=sell',[Controller::class,'']);