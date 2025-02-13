<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>@yield('title')</title>

  @stack('prepend-style')
  @include('includes.frontend.style')
  @stack('addon-style')

</head>

<body>
  
  @include('includes.frontend.navbar')

  {{-- Main & Header --}}
  @yield('content')

  @include('includes.frontend.footer')

  @stack('prepend-script')
  @include('includes.frontend.script')
  @stack('addon-script')
</body>

</html>