@php 
 $sid=session('sid');
@endphp 
@if(empty($sid))
  
@endif 

<!doctype html>
<html lang="en">
  <head>
    @include('admin.includes.head')
    <title>Dashboard</title>
  </head>
  <body>
      <main>
      @include('admin.includes.nav')
      <section class="row container">
          <aside class="col-sm-3">
          @include('admin.includes.sidebar')
          </aside>
          <aside class="col-sm-9">
              @yield('content')
          </aside>
      </section>

      </main>
    @include('admin.includes.foot')
  </body>
</html>