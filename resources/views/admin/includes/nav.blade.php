<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item mx-2">
        <a class="nav-link">Home <span class="sr-only">(current)</span></a>
      </li>
    
      <li class="nav-item mx-2">
        <a class="nav-link" >Welcome: {{$sid->email}}</a>
      </li>

      <li class="nav-item mx-2">
        <a class="nav-link" href="changepass" >Change Password</a>
      </li>

      <li class="nav-item mx-2">
        <a class="nav-link" href="editdetails" >Edit Details </a>
      </li>

    </ul>
    <span class="navbar-text">
    <a class="mx-3" href="logout">Logout</a>
    </span>

  </div>
</nav>