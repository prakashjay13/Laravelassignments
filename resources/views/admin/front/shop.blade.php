
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop | E-Shopper</title>
    @include('admin.front.includes.head')
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(".delcat").click(function(e){
          var cid=$(this).attr("cid");
          $.ajax({
              url:"{{url('deletecategory')}}",
              method:'delete',
              data:{_token:'{{csrf_token()}}',cid:cid},
              success:function(response){
                console.log(response)
                $("#mytable").load(location.href + " #mytable");
              }
          })
        })
    })
    </script>

<body>
@include('admin.front.includes.header')

<section>

  <h1> Category </h1>

  <table class="table" id="mytable">
      <tr>
      <th colspan="5" class="text-center">
              <a href="/addcategory" class="btn btn-warning">Add Category</a>
          </th>
      </tr>
      <tr>
          <th>S.no</th>
          <th>Name</th>
          <th> Description </th>
          <th> Image </th>
          <th> Actions </th>
      </tr>
      @php 
       $sn=1;
      @endphp
      @foreach($catdata as $cat)
        <tr>
            <td>{{$sn}}</td>
            <td>{{$cat->name}}</td>
            <td>{{$cat->description}}</td>
            <td>
            <img src="{{asset('/uploads/'.$cat->image)}}" width=50 height=50/>
            </td>
            <td><a href="/editcategory/{{$cat->id}}" class="btn btn-info">Edit</a>
                <a href="javascript:void(0)" cid="{{$cat->id}}" class="btn btn-danger delcat">Delete</a></td>
        </tr>
        @php 
       $sn++;
      @endphp
      @endforeach
  </table>

  </section>	
	

@include('admin.front.includes.footer')
@include('admin.front.includes.foot')
    
</body>
</html>