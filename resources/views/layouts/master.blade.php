<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{asset('css/layout-style/master.css')}}">
  <link rel="stylesheet" href="{{asset('css/layout-style/footer.css')}}">
  @yield('css')
</head>
<body>
  @include('layouts/navbar')
  <main>

    <div class="container">
      @yield('konten')
    </div>
  </main>
@include('layouts/footer')
</body>
</html>