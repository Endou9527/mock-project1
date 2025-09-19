<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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
Route::get('/', [ProductController::class,'indexGuest']);
// 商品一覧（ログイン状態）￥表示
Route::get('/?tab=mylist',[ProductController::class,'index']);
// 会員登録画面￥表示
Route::get('/register',[AuthController::class,'showRegistrationForm']);
// メール認証画面誘導￥表示
Route::get('/register/mail_setting',[AuthController::class,'showEmailVerificationNotice']);
// 会員登録￥実行
Route::post('/register',[AuthController::class,'register']);
// ログイン画面￥表示
Route::get('/login',[AuthController::class,'showLoginForm']);
// ログイン￥実行
Route::post('/login',[AuthController::class,'login']);
// 商品詳細￥表示
Route::get('/item/{item_id}',[ProductController::class,'show']);
// 商品購入画面￥表示
Route::get('/purchase/{item_id}',[ProductController::class,'purchaseForm']);
// 商品購入￥実行
Route::post('/purchase/{item_id}',[ProductController::class,'purchase']);
// 送付先住所変更画面￥表示
Route::get('/purchase/address/{item_id}',[AuthController::class,'editAddress']);
// 送付先住所変更￥実行
Route::post('/purchase/address/{item_id}',[AuthController::class,'updateAddress']);
// 商品出品￥表示
Route::get('/sell',[ProductController::class,'create']);
// 商品出品￥実行
Route::get('/sell/store',[ProductController::class,'store']);
// プロフィール画面￥表示
Route::get('/mypage',[UserController::class,'showProfile']);
// プロフィール編集画面￥表示
Route::get('/mypage/profile',[UserController::class,'editProfile']);
// プロフィール編集￥実行
Route::post('/mypage/profile',[UserController::class,'updateProfile']);
// 購入した商品一覧￥表示
Route::get('/mypage?page=buy',[UserController::class,'purchasedList']);
// 出品した商品一覧￥表示
Route::get('/mypage?page=sell',[UserController::class,'soldList']);