@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header_inner')
@endsection

@section('content')
  <h2 class="page_title">会員登録</h2>
  <form action="">
    <label for="user_name">ユーザ名
      <input type="text" id="user_name" name="name" />
    </label>
    <label for="email">メールアドレス
      <input type="text" id="email" name="email" />
    </label>
    <label for="password">パスワード
      <input type="password" id="password" name="password" />
    </label>
    <label for="password">確認用パスワード
      <input type="password" id="password" name="password_confirmation" />
    </label>
    <button type="submit">登録する</button>
  </form>
  <a href="/login">ログインはこちら</a>
@endsection