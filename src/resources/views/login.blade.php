@extends('layouts.app')

@section('title' , 'ログイン画面')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('header_inner')
@endsection

@section('content')
  <h2 class="page_title">ログイン</h2>
  <form action="">
    <label for="email">メールアドレス
      <input type="text" id="email" name="email" />
    </label>
    <label for="password">パスワード
      <input type="password" id="password" name="password" />
    </label>
    <button type="submit">ログインする</button>
  </form>
  <a href="/register">会員登録はこちら</a>
@endsection