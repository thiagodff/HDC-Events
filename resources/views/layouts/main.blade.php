<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="/css/styles.css">
  <script src="/js/scripts.js"></script>

  <title>HDC Events | @yield('title')</title>
</head>

<body class="antialiased">

  @yield('content')

  <footer>
    <p>HDC Events &copy; 2021</p>
  </footer>
</body>

</html>
