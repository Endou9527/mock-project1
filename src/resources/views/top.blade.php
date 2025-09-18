@extends(layouts.app)

@section('title',商品一覧画面（トップ画面）)
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