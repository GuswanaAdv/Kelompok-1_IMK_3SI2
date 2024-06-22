<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('js/app.js') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .sidebar-item:hover,
    .sidebar-item:focus,
    .sidebar-item:active {
      /* background-color: #93C13D !important; */
      background-color: #FFFFFF;
      color: white !important;
    }

    body {
      background-color: white;
      color: black;
    }
  </style>

  <title>{{$judul_halaman}}</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>
  <script>
    gsap.registerPlugin(ScrollTrigger);
  </script>
  
  @yield('head')
</head>

<body class="">
  {{--Navbar--}}
  @include('partials.navbar')
  @if($judul_halaman=='Beranda')

  @else
    @include('partials.breadcrumbs')
  @endif

  {{--Sidebar--}}

  {{--Main--}}
  <div class="@yield('main-class', 'px-4 sm:px-0')">
    @yield('content')
  </div>
  @include('partials.top_button')

  {{--Foter--}}
  <div class="">
    @include('partials.footer')
  </div>
  
  <!-- Animasi -->

  <script>
    // Register the ScrollTrigger plugin
    gsap.registerPlugin(ScrollTrigger);

    // Create a GSAP animation for elements with the class 'gsap-fade-up'
    gsap.utils.toArray('.fade-left').forEach(element => {
        gsap.fromTo(element, {
          opacity: 0,
          x: 90,
      },{
          opacity: 1,
          x: 0,
          duration: 1,
          delay: 0.5,
          scrollTrigger:element
      });
    })

    gsap.utils.toArray('.fade-right').forEach(element => {
        gsap.fromTo(element, {
          opacity: 0,
          x: -90,
      },{
          opacity: 1,
          x: 0,
          duration: 1,
          delay: 0.5,
          scrollTrigger:element
      });
    })

    gsap.utils.toArray('.fade-down').forEach(element => {
        gsap.fromTo(element, {
          opacity: 0,
          y: -40,
      },{
          opacity: 1,
          y: 0,
          duration: 1,
          delay: 0.5,
          scrollTrigger:element
      });
    })

    gsap.utils.toArray('.fade-up').forEach(element => {
        gsap.fromTo(element, {
          opacity: 0,
          y: 70,
      },{
          opacity: 1,
          y: 0,
          duration: 1,
          delay: 0.5,
          scrollTrigger:element
      });
    })

    gsap.utils.toArray('.fade-in').forEach(element => {
        gsap.fromTo(element, {
          opacity: 0,
      },{
          opacity: 1,
          duration: 3,
          delay: 0.5,
          scrollTrigger:element
      });
    })
  </script>
  <!-- End of Animasi -->
</body>

</html>