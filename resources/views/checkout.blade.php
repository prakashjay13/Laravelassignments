<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart </title>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
</head>
<style>
    body{
	margin: 0;
	padding: 0;
	background: linear-gradient(to bottom right, #E3F0FF, #FAFCFF);
	height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
}

.CartContainer{
	width: 70%;
	height: 90%;
	background-color: #ffffff;
    border-radius: 20px;
    box-shadow: 0px 10px 20px #1687d933;
}

.Header{
	margin: auto;
	width: 90%;
	height: 15%;
	display: flex;
	justify-content: space-between;
	align-items: center;
}

.Heading{
	font-size: 20px;
	font-family: 'Open Sans';
	font-weight: 700;
	color: #2F3841;
}

.Action{
	font-size: 14px;
	font-family: 'Open Sans';
	font-weight: 600;
	color: #E44C4C;
	cursor: pointer;
	border-bottom: 1px solid #E44C4C;
}

.Cart-Items{
	margin: auto;
	width: 90%;
	height: 30%;
	display: flex;
	justify-content: space-between;
	align-items: center;
}
.image-box{
	width: 15%;
	text-align: center;
}
.about{
	height: 100%;
	width: 24%;
}
.title{
	padding-top: 10px;
	line-height: 10px;
	font-size: 32px;
	font-family: 'Open Sans';
	font-weight: 800;
	color: #202020;
}
.subtitle{
	line-height: 10px;
	font-size: 18px;
	font-family: 'Open Sans';
	font-weight: 600;
	color: #909090;
}

.counter{
	width: 15%;
	display: flex;
	justify-content: space-between;
	align-items: center;
}
.btn{
	width: 40px;
	height: 40px;
	border-radius: 50%;
	background-color: #d9d9d9;
	display: flex;
	justify-content: center;
	align-items: center;
	font-size: 20px;
	font-family: 'Open Sans';
	font-weight: 900;
	color: #202020;
	cursor: pointer;
}
.count{
	font-size: 20px;
	font-family: 'Open Sans';
	font-weight: 600;
	color: #202020;
}

.prices{
	height: 100%;
	text-align: right;
}
.amount{
	padding-top: 20px;
	font-size: 26px;
	font-family: 'Open Sans';
	font-weight: 800;
	color: #202020;
}
.save{
	padding-top: 5px;
	font-size: 14px;
	font-family: 'Open Sans';
	font-weight: 600;
	color: #1687d9;
	cursor: pointer;
}
.remove{
	padding-top: 5px;
	font-size: 14px;
	font-family: 'Open Sans';
	font-weight: 600;
	color: #E44C4C;
	cursor: pointer;
}

.pad{
	margin-top: 5px;
}

hr{
	width: 66%;
	float: right;
	margin-right: 5%;
}
.checkout{
	float: right;
	margin-right: 5%;
	width: 28%;
}
.total{
	width: 100%;
	display: flex;
	justify-content: space-between;
}
.Subtotal{
	font-size: 22px;
	font-family: 'Open Sans';
	font-weight: 700;
	color: #202020;
}
.items{
	font-size: 16px;
	font-family: 'Open Sans';
	font-weight: 500;
	color: #909090;
	line-height: 10px;
}
.total-amount{
	font-size: 36px;
	font-family: 'Open Sans';
	font-weight: 900;
	color: #202020;
}
.btn-primary{
	margin-top: 10px;
	width: 100%;
	height: 40px;
	border: none;
	background: linear-gradient(to bottom right, #B8D7FF, #8EB7EB);
	border-radius: 20px;
	cursor: pointer;
	font-size: 16px;
	font-family: 'Open Sans';
	font-weight: 600;
	color: #202020;
}
</style>
<body>
   <div class="CartContainer">
   	   <div class="Header">
   	   	<h3 class="Heading">Shopping Cart</h3>
   	   	<h5 class="Action">Remove all</h5>
   	   </div>

   	   <div class="Cart-Items">
   	   	  <div class="image-box">
   	   	  	<img src="uploads/3.jpg"  height="120px"  />
   	   	  </div>
   	   	  <div class="about">
   	   	  	<h1 class="title">4 CHEESE</h1>
   	   	  	<h3 class="subtitle">Medium</h3>
   	   	  	<img src="uploads/veg.png"  height="30px"}/>
   	   	  </div>
   	   	  <div class="counter">
   	   	  	<div class="btn">+</div>
   	   	  	<div class="count">2</div>
   	   	  	<div class="btn">-</div>
   	   	  </div>
   	   	  <div class="prices">
   	   	  	<div class="amount">Rs 300</div>
   	   	  	<div class="save"><u>Save for later</u></div>
   	   	  	<div class="remove"><u>Remove</u></div>
   	   	  </div>
   	   </div>

   	   <div class="Cart-Items pad">
   	   	  <div class="image-box">
   	   	  	<img src="uploads/2.jpg"  height="120px"  />
   	   	  </div>
   	   	  <div class="about">
   	   	  	<h1 class="title">FARMHOUSE</h1>
   	   	  	<h3 class="subtitle">Regular</h3>
   	   	  	<img src="uploads/veg.png"  height="30px" />
   	   	  </div>
   	   	  <div class="counter">
   	   	  	<div class="btn">+</div>
   	   	  	<div class="count">1</div>
   	   	  	<div class="btn">-</div>
   	   	  </div>
   	   	  <div class="prices">
   	   	  	<div class="amount">Rs 400</div>
   	   	  	<div class="save"><u>Save for later</u></div>
   	   	  	<div class="remove"><u>Remove</u></div>
   	   	  </div>
   	   </div>
   	 <hr> 
   	 <div class="checkout">
   	 <div class="total">
   	 	<div>
   	 		<div class="Subtotal">Sub-Total</div>
   	 		<div class="items">2 items</div>
   	 	</div>
   	 	<div class="total-amount">Rs 700</div>
   	 </div>
        <a class="btn btn-primary" href="dashboard" role="button">Checkout</a>
   </div>
</body>
</html>