<style>
        .navbar-brand{
            height: 50px;
            width: 100px;
            border-radius: 50%;
        }
        </style>

<nav class="navbar navbar-expand-lg navbar-light">
<img src="{{ URL::asset('uploads/pizza2.jpg') }}"  class="navbar-brand">
  <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
  </div>  
    <div class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-warning my-2 my-sm-0" role="button" href="register">Sign Up</a>
      <a class="btn btn-outline-dark my-2 my-sm-0 ml-2" role="button" href="login">Login</a>
    </div>
</nav>