@extends('layouts.app')

@section('title','プロフィール設定画面')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/setting.css') }}">
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
  <h2 class="page_title">プロフィール設定</h2>
  <form action="">
    <div class="profile_top">
      <div class="profile_top--icon"></div>
      <div class="profile_top--input">
        <input type="file">
      </div>
    </div>
    <label for="user_name">ユーザ名
      <input type="text" id="user_name" name="name" />
    </label>
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