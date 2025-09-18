<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="style.css">
  @yield('css')
</head>
<body>
  <header class="header">
      <a href="/" class="header_logo">
        <img src="logo.svg" alt="サイトロゴ">
      </a>
      <div class="header_inner">
        @yield('header_inner')
      </div>
  </header>
  <main>
    @yield('content')
  </main>
  
</body>
</html>