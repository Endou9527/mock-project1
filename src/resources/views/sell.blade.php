@extends('layouts.app')

@section('title' , '商品出品画面')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/sell.css') }}">
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
  <h2 class="page_title">商品の出品</h2>
  <form action="">
    <div class="image">商品画像
      <input type="file" id="image" name="image" />
    </div>
    
    <div class="detail">商品の詳細
      <div class="category">
        @foreach()
        <input type="checkbox" name="name" />
        <label for=""></label>
        @endforeach
      </div>
      <div class="status">
        <select name="" id="">
          <option value="">選択してください</option>
          @foreach
          <option value=""></option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="content">郵便番号
      <label for="product_name">商品名
        <input type="text" id="product_name" name="name" />
      </label>
      <label for="product_brand">ブランド名
        <input type="text" id="product_brand" name="brand" />
      </label>
      <label for="product_price">販売価格
        <input type="number" id="product_price" name="price" />
      </label>

    </div>
    <button type="submit">出品する</button>
  </form>
@endsection