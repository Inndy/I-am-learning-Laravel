<!DOCTYPE html>
<html lang="zh_TW">
<head>
  <meta charset="UTF-8">
  <title>Laravel Site!</title>
  <link rel="shortcut icon" href="/lab.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="{{ asset('style/base.css') }}" media="all" />
</head>
<body>
  <div class="main">
    @yield('content')
  </div>
</body>
</html>
