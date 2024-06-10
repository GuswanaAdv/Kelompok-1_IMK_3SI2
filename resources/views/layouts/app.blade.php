<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('js/app.js') }}" rel="stylesheet">
</head>

<body class="">
  {{--Navbar--}}
  @include('partials.navbar')

  {{--Main--}}
  <div class="px-10">
    @yield('content')
  </div>

  {{--Foter--}}
  @include('partials.footer')
  
</body>
</html>