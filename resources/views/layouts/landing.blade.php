<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags')
    </head>
    <body>
    <section id="app-layout">
   @include('includes.side-menu')
    <div class="welcome-jumbo">
      <div class="status">NEW</div>
      <h1>Savage Pizza</h1>
      <img src="img/savage-pics/store_front.png" class="burger-fries">
    </div>
  </section>
   @yield('content')
 
    </body>
</html>



