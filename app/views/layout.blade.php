<!DOCTYPE html>
<html lang="zh_TW">
<head>
  <meta charset="UTF-8">
  <title>Laravel Site!</title>
  <link rel="shortcut icon" href="/lab.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="{{ asset('style/base.css') }}" media="all" />
  <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" media="all" />
  <script type="text/javascript" src="{{ asset('script/jquery-2.1.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</head>
<body>
  <div class="main">
    @yield('content')
  </div>
</body>
</html>
