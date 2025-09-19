@extends('layouts.app')

@section('title' , '商品購入画面')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
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
<form action="/purchase/{item_id}" >
  {{-- 左 --}}
  <div class="left">
    <div class="about-product">
      <img src="" alt="商品画像" class="image" />
      <div class="content">
        <div class="product--name"></div>
        <div class="product--price"></div>
      </div>
    </div>
    <div class="payment">
      <label for="payment">
        <select name="payment" id="payment">
          <option value="">選択してください</option>
          <option value="convenience_store">1.コンビニ払い</option>
          <option value="card">2.カード払い</option>
        </select>
      </label>
    </div>
    <div class="address">
      <div class="address_confirmation">

      </div>
      <a href="/purchase/address/{item_id}" class="address_change">変更する</a>
    </div>
  </div>

  {{-- 右 --}}
  <div class="right">
    <table>
      <tr>
        <th></th>
        <td></td>  
      </tr>
      <tr>
        <th></th>
        <td></td>
      </tr>
    </table>
    <div class="amount"></div>
    <div class="payment_method"></div>
  </div>
  <button type="submit">購入する</button>
</form>
@endsection