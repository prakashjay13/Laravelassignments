<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.includes.head')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
@include('admin.includes.nav')
    
<!-- Header image -->
<div style="height:800px;background-image:url('/uploads/7.jpg');background-size:cover" class="w3-display-container w3-grayscale-min">
<div class="w3-display-bottomleft">
<span class="w3-tag w3-xlarge">Open from 10am to 12pm</span>
</div>
<div class="w3-display-middle w3-center">
<span class="w3-text-white" style="font-size:100px">thin<br>CRUST PIZZA</span>
<a class="btn btn-info" style="text-align: center;" href="menu" role="button"><h3>Let me see the menu</h3></a>
</div>
</div>

<!-- End Content -->
</div>




@include('admin.includes.foot')
</body>
</html>