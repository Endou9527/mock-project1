@extends('layouts.app')

{{-- @section('title','{ $product->name }の商品詳細') --}}

@section('css')
  <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('header_inner')
  <div class="header_inner--left">
    <input type="text" name="help" placeholder="なにをお探しですか" />
  </div>
  <div class="header_inner--right">
  @guest
    <a href="/login">ログイン</a>
  @endguest
  @auth
    <form class="form--logout" action="{{ route('logout') }}" method="post">
      @csrf
      <button type="submit" class="logout-btn">ログアウト</button>
    </form>
  @endauth
    <a href="/mypage"></a>
    <a href="/sell">出品</a>
  </div>
@endsection

@section('content')
  {{-- 左 --}}
  <div class="page_left">
    <img src="" alt="商品画像">
  </div>

  {{-- 右 --}}
  <div class="page_right">
    <div class="about_product">
      <div class="name"></div>
      <div class="brand"></div>
      <div class="price"></div>
      <div class="purchase_button">
        <a href="/purchase/{item_id}">購入手続きへ</a>
      </div>
      <div class="description"></div>
      <div class="information">
        <div class="imformation_category"></div>
        <div class="information_status"></div>
      </div>
      <div class="review">
        <div class="review_comment"></div>
        <div class="review_form">
          <form class="form--comment" action="">
            <input type="textarea" name="comment" />
            <button type="submit">コメントを送信する</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection