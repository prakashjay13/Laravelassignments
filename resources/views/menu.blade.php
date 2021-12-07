<!DOCTYPE html>
<html>
    <head>
    @include('admin.includes.head')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Menu</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3132/3132693.png" type="image/icon type">
</head>

    <body>
    @include('admin.includes.nav')
    <div class="container mt-4">
    <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <h5 class="card-title"><img src="/uploads/2.jpg" height="250px" width="250px" alt=""></h5>
        <p class="card-text">FARMHOUSE</p>
        <p class="card-text">Rs 400</p>
        <a href="checkout" class="btn btn-primary">Add to Cart</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><img src="/uploads/3.jpg" height="250px" width="300px" alt=""></h5>
        <p class="card-text">4 CHEESE</p>
        <p class="card-text">Rs 350</p>
        <a href="checkout" class="btn btn-primary">Add to Cart</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><img src="/uploads/4.jpg" height="250px" width="250px" alt=""></h5>
        <p class="card-text">PEPPERONI</p>
        <p class="card-text">Rs 380</p>
        <a href="checkout" class="btn btn-primary">Add to Cart</a>
      </div>
    </div>
  </div>
</div>
</div>
<div class="container mt-4">
    <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><img src="/uploads/1.jpg" height="250px" width="250px" alt=""></h5>
        <p class="card-text">EXTRA CHEESE</p>
        <p class="card-text">Rs 520</p>
        <a href="checkout" class="btn btn-primary">Add to Cart</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><img src="/uploads/5.jpg" height="250px" width="300px" alt=""></h5>
        <p class="card-text">BARBEQUEE</p>
        <p class="card-text">Rs 430</p>
        <a href="checkout" class="btn btn-primary">Add to Cart</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><img src="/uploads/6.jpg" height="250px" width="250px" alt=""></h5>
        <p class="card-text">VEG SINGLES</p>
        <p class="card-text">Rs 300</p>
        <a href="checkout" class="btn btn-primary">Add to Cart</a>
      </div>
    </div>
  </div>
</div>
</div>
    

    @include('admin.includes.foot')
    </body>
</html>