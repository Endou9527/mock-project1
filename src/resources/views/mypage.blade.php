@extends('layouts.app')

@section('title' , 'プロフィール画面')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
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
  <div class="product_list">
    {{-- タブ「出品した商品」 --}}
    <div class="product_list--sold">
      <div class="sold_tab">
        <input type="radio" id="sold_list" name="tab" /><label for="sold_list">出品した商品</label>
      </div>
      <div class="sold_products">
        <div class="mylist_contents">
          {{-- @foreach('') --}}
          <a href="/item/{item_id}" class="mylist_content">
            <img src="" alt="" />
            <div class="detail_content">
              {{-- <p>{{ $product->name }}</p> --}}
            </div>
          </a>
          {{-- @endforeach --}}
        </div>
      </div>
    </div>
    {{-- タブ「購入した商品」 --}}
    <div class="purchased_list--sold">
      <div class="purchased_tab">
        <input type="radio" id="purchased_list" name="tab" /><label for="purchased_list">出品した商品</label>
      </div>
      <div class="purchased_products">
        <div class="mylist_contents">
          {{-- @foreach('') --}}
          <a href="/item/{item_id}" class="mylist_content">
            <img src="" alt="" />
            <div class="detail_content">
              {{-- <p>{{ $product->name }}</p> --}}
            </div>
          </a>
          {{-- @endforeach --}}
        </div>
      </div>
    </div>
  </div>
@endsection