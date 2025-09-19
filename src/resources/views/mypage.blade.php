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
  {{-- おすすめ内 --}}
  <div class="sold_list">
    <div class="sold_list--tab">
      <input type="radio" id="sold_list" name="tab" /><label for="sold_list">出品した商品</label>
    </div>
    <div class="sold_products">
      <div class="mylist_contents">
        {{-- @foreach('') --}}
        <div class="recommend_content">
          <a href="/item/{item_id}">
            <img src="" alt="" />
            <div class="detail_content">
              {{-- <p>{{ $product->name }}</p> --}}
            </div>
          </a>
        </div>
        {{-- @endforeach --}}
      </div>
    </div>
  </div>
  {{-- マイリスト内 --}}
  <div class="purchased_list">
    <div class="mylist_tab">
      <input type="radio" id="mylist_tab" name="tab" /><label for="mylist_tab">マイリスト</label>
    </div>
    <div class="mylist_products">
      <div class="mylist_contents">
        {{-- @foreach('') --}}
        <div class="mylist_content">
          <a href="/item/{item_id}">
            <img src="" alt="" />
            <div class="detail_content">
              {{-- <p>{{ $product->name }}</p> --}}
            </div>
          </a>
        </div>
        {{-- @endforeach --}}
      </div>
    </div>
  </div>
@endsection