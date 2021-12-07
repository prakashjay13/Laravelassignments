<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <div class="navbar-header">


            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://st.depositphotos.com/1168906/1399/v/950/depositphotos_13990278-stock-illustration-pizza-icon.jpg" alt="Logo" style="width:60px;">
                 Yummy Pizza
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item mx-2">
        <a href="dashboard" class="nav-link active">Home <span class="sr-only">(current)</span></a>
      </li>
    
      <li class="nav-item mx-2">
        <a href="menu" class="nav-link active" >Menu</a>
      </li>

      <li class="nav-item mx-2">
        <a href="login" class="nav-link active" href="changepass" >Login</a>
      </li>

      <li class="nav-item mx-2">
        <a href="register" class="nav-link active" href="editdetails" >Register </a>
      </li>

    </ul>
    <ul class="navbar-nav ml-auto  ">
                    <li>
                        <i class="fa fa-shopping-cart"></i>
                        <a href="checkout" class="icon-shopping-cart" style="font-size: 25px">
                        <asp:Label ID="lblCartCount" runat="server" CssClass="badge badge-warning"  ForeColor="White"/>Cart</a>
                   </li>
                  <li class="nav-item ">
                    <a class="nav-link text-dark" href="#"><i class=" fa fa-search"></i> </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link text-dark" href><i class=" fa fa-bars"></i></a>
                  </li>
               </ul>
    <span class="navbar-text">
    <a class="mx-3" href="logout">Logout</a>
    </span>

  </div>
</nav>