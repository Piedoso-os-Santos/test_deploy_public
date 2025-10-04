<!DOCTYPE html>
<html lang="pt">
<head>
  @include('components.head')
</head>
<body>

  @include('components.navbar')

  <main>
    @yield('content')
  </main>

  @include('components.footer')
  @include('components.scripts')

</body>
</html>
