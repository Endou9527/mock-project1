@extends('layouts.app')

@section('title','商品一覧画面（トップ画面）')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/top.css') }}">
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
  <div class="reccommend">
    <div class="recommend_tab">
      <input type="radio" id="recommend_tab" name="tab" /><label for="recommend_tab">おすすめ</label>
    </div>
    <div class="reccommend_products">
      <dimylist_contents">
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
  <div class="mylist">
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