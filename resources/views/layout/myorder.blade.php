<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('include.head')
    <title>Menu | Yummy Pizzas</title>
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
        <h1>Order Details</h1>
    </section>
     <section class="container mt-4">
     <table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Details</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="col">Order Id</th>
            <td>{{$order->id}}</td>
        </tr>
        <tr>
            <th scope="col">Card Details</th>
            <td>{{$order->ccdetails}}</td>
        </tr>
        <tr>
            <th scope="col">Total Amount</th>
            <td>{{$order->total}}</td>
        </tr>
        <tr>
            <th scope="col">Product Name</th>
            <td>{{$product->name}}</td>
        </tr>
        <tr>
            
        </tr>
    </tbody>
    </table>
    </section> 
</body>
</html>