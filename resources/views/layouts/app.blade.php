<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('js/app.js') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .sidebar-item:hover, .sidebar-item:focus, .sidebar-item:active {
        background-color: #93C13D !important;
        color: white !important;
    }
  </style>

  <title>{{$judul_halaman}}</title>
</head>

<body class="">
  {{--Navbar--}}
  @include('partials.navbar')
  @include('partials.breadcrumbs')

  {{--Sidebar--}}

  {{--Main--}}
  <div class="px-10">
    @yield('content')
  </div>
  @include('partials.top_button')

  {{--Foter--}}
  <div class="">
    @include('partials.footer')
  </div>
  
</body>
</html>