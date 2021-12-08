<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('include.head')
    <title>Success |Yummy Pizzas</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3132/3132693.png" type="image/icon type">
    <style>
        .nbar{
            height: 80px;
            width: 80px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <section class="container-fluid">
        @include('include.nav')
    </section>
    <section class="container mt-4">
        <h1>Hooray your order has been placed successfully 😁😁!!</h1>
       <div class="alert alert-success mt-4"> You will receive notification by email with order details. </div>
       <a class="btn btn-dark" href="{{route('DashBoard')}}">Wanna try our other Pizzas??</a>
    </section>
</body>
</html>