@php 
 $sid=session('sid');
@endphp 
@if(empty($sid))
  
@endif 

<!doctype html>
<html lang="en">
  <head>
    @include('admin.includes.head')
    <title>Yummy Pizza</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3132/3132693.png" type="image/icon type">
  </head>
  <body>
      <main>
      @include('admin.includes.nav')
      <section class="row container">
          <!-- <aside class="col-sm-3">
          @include('admin.includes.sidebar')
          </aside> -->
          <aside class="col col-lg-12">
              @yield('content')
          </aside>
      </section>

      </main>
    @include('admin.includes.foot')
  </body>
</html>