@extends('layouts.app')

@section('title')
  商品出品画面
@endsection
  
@section('css')
  <link rel="stylesheet" href="{{ asset('css/sell.css') }}">
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
  <h2 class="page_title">商品の出品</h2>
  <form action="/sell" method="post" enctype="multipart/form-data">
    @csrf
    <div class="image">商品画像
      <input type="file" id="image" name="image" value="{{ old('image') }}" />
        @error('image')
        {{ $message }}
        @enderror
    </div>
    
    <div class="detail">商品の詳細
      <div class="category">カテゴリー
        @foreach($categories as $category)
          <input type="checkbox" name="category_id[]" value="{{ $category->id }}"  {{ in_array($category->id, old('category_id', [])) ? 'checked' : '' }}/>
          <label for="category">{{ $category->name }}</label>
        @endforeach
        @error('category_id')
          {{ $message }}
        @enderror
      </div>
      <div class="status">商品の状態
        <select name="status_id" id="">
          <option value="">選択してください</option>
          @foreach($statuses as $status)
          <option value="{{ $status->id }}" {{ old('status_id') == $status->id ? 'selected' : '' }}>{{ $status->name }}</option>
          @endforeach
        </select>
        @error('status_id')
          {{ $message }}
        @enderror
      </div>
    </div>

    <div class="content">商品名と説明
      <label for="product_name">商品名
        <input type="text" id="product_name" name="name" value="{{ old('name') }}" />
        @error('name')
          {{ $message }}
          @enderror
      </label>
      <label for="product_description">ブランド名
        <input type="text" id="product_brand" name="brand" value="{{ old('brand') }}"/>
      </label>
      <label for="product_description">商品の説明
        <textarea id="product_description" name="description">{{ old('description') }}</textarea>
        @error('description')
          {{ $message }}
        @enderror
      </label>
      <label for="product_price">販売価格
        <input type="number" id="product_price" name="price" value="{{ old('price') }}"/>
          @error('price')
            {{ $message }}
          @enderror
      </label>

    </div>
    <button type="submit">出品する</button>
  </form>
@endsection