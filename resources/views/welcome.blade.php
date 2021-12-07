<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('include.head')
    <title>Welcome |Yummy Pizzas</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3132/3132693.png" type="image/icon type">
    <style>
        #twh{
    font-style: italic;
    font-weight: bolder;
    font-size: 80px;
    color: yellow;
}
#esp{
    font-style: italic;
    font-weight: bolder;  
    color: chartreuse;
}
    </style>
</head>
<body>
    <section class="container mt-3">
        @include('include.mainnav')
    </section>
    <div class="container">
    <header id="showcase" class="grid">
        <div class="bg-image"></div>
        <div class="content-wrap">
                    <img class="image" src="/uploads/7.jpg"  width="100%" height="650px">
                    <div class="carousel-caption text-center ">
                        <h2 id="twh">The World </h2>
                        <h2 id="twh"> of Yummy Pizzas</h2>
                        <br>
                        <h4 id="esp" class="">SAVE <span class="bluebold">20% </span>&nbsp; On All Orders </h4>

                        <p class="p1"> ━━━━━━━━━━━━━━━━━━━━━━━━</p>
                        <p class="p1"> ━━━━━━━━━━━━━━</p>
                        <a class="btn btn-info" href="login" role="button">Order Now 🡢</a>

                    </div>
                </div>


            </div>

        </div>

@include('include.foot')
</body>
</html>