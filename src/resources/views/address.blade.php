@extends('layouts.app')

@section('title' , '送付先住所変更画面')

@section('css')
<link rel="stylesheet" href="{{ asset('css/address.css') }}">
@endsection

@section('header_inner')
  <div class="header_inner--left">
    <input type="text" name="help" placeholder="なにをお探しですか" />
  </div>
  <div class="header_inner--right">
  <!-- @if('Authcheck') -->
    <a href="/login">ログイン</a>
  <!-- @endif -->
    <a href="/mypage"></a>
    <a href="/sell">出品</a>
  </div>
@endsection

@section('content')
  <h2 class="page_title">住所の変更</h2>
  <form action="/purchase/address/{item_id}">
    <label for="post_code">郵便番号
      <input type="text" id="post_code" name="post_code" />
    </label>
    <label for="address">住所
      <input type="address" id="address" name="address" />
    </label>
    <label for="building">建物名
      <input type="building" id="building" name="building" />
    </label>
    <button type="submit">更新する</button>
  </form>
@endsection