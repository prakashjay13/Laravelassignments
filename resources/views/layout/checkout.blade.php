<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('include.head')
    <title>Checkout | Yummy Pizzas</title>
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
        <h1>Hey User you are just one step away from enjoying a delicious meal!!</h1>
    </section>
    <section class="container mt-4">
        <form action="{{route('PostOrder')}}" method="post">
            @csrf()
            <div class="form-group">
                <label class="form-label">Enter your Credit Card number</label>
                <input type="text" class="form-control" name="ccdetail" placeholder="e.g. XXXX-XXXX-XXXX-1234"/>
            </div>
            <div class="form-group">
                <strong class="text">Total : Rs. {{$total}}</strong>
                <input type="hidden" value="{{$total}}" name="total"/>
            </div>
            <div>
            <button class="btn btn-success p-2" type="submit" name="sub">Submit</button>
            </div>
        </form>
    </section>


</body>
</html>