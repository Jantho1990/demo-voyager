<!DOCTYPE html>
<html>
  <head>
    @include('partials._head')
  </head>
  <body>
    @include('partials._header')
    <main id="app" class="section">
      @yield('content')
    </main>
    @include('partials._footer')
  </body>
</html>
