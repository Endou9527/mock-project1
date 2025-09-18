@extends('layouts.app')

@section('content')
  <h2>住所の変更</h2>
  <label for="post_code">郵便番号
    <input type="text" id="post_code">
  </label>
  <label for="address">住所
    <input type="text" id="address">
  </label>
  <label for="building">建物名
    <input type="text" id="building">
  </label>
@endsection