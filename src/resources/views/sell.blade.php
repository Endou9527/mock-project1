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
  <form action="/sell" method="post">
    @csrf
    <div class="image">商品画像
      <input type="file" id="image" name="image" value="{{ old('image') }}" />
        @error('image')
        {{ $message }}
        @enderror
    </div>
    
    <div class="detail">商品の詳細
      <div class="category">カテゴリー
        {{-- @foreach() --}}
        <input type="checkbox" name="category" value="" />
        <label for="category"></label>
        {{-- @endforeach --}}
          @error('category')
          {{ $message }}
          @enderror
      </div>
      <div class="status">商品の状態
        <select name="status" id="">
          <option value="">選択してください</option>
          {{-- 以下仮option --}}
          <option value="1" name="1.良い">良い</option>
          {{-- 以上 --}}
          {{-- @foreach('') --}}
          <option value=""></option>
          {{-- @endforeach --}}
        </select>
        @error('status')
          {{ $message }}
        @enderror
      </div>
    </div>

    <div class="content">商品名と説明
      <label for="product_name">商品名
        <input type="text" id="product_name" name="name" />
        @error('name')
          {{ $message }}
          @enderror
      </label>
      <label for="product_description">ブランド名
        <input type="text" id="product_brand" name="brand" />
      </label>
      <label for="product_description">商品の説明
        <input type="textarea" id="product_description" name="description" />
        @error('description')
          {{ $message }}
        @enderror
      </label>
      <label for="product_price">販売価格
        <input type="number" id="product_price" name="price" />
          @error('price')
            {{ $message }}
          @enderror
      </label>

    </div>
    <button type="submit">出品する</button>
  </form>
@endsection