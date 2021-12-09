@extends('admin.master')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(".delpro").click(function(e){
          var cid=$(this).attr("cid");
          $.ajax({
              url:"{{url('deleteproduct')}}",
              method:'delete',
              data:{_token:'{{csrf_token()}}',cid:cid},
              success:function(response){
                console.log(response)
                $("#mytable1").load(location.href + " #mytable1");
              }
          })
        })
    })
    </script>



  <h1> Products </h1>

  <table class="table" id="mytable1">
      <tr>
      <th colspan="5" class="text-center">
              <a href="/addproduct" class="btn btn-warning">Add Products</a>
          </th>
      </tr>
      <tr>
          <th>S.no</th>
          <th>Cid</th>
          <th>Name</th>
          <th> Price </th>
          <th> Quantity </th>
          <th>Features</th>
          <th>Image</th>
          <th> Actions </th>
      </tr>
      @php 
       $sn=1;
      @endphp
      @foreach($prodata as $prod)
        <tr>
            <td>{{$sn}}</td>
            <td>{{$prod->cid}}</td>
            <td>{{$prod->pname}}</td>
            <td>{{$prod->price}}</td>
            <td>{{$prod->quantity}}</td>
            <td>{{$prod->features}}</td>
            <td>{{$prod->image}}</td>
            <td>
            <img src="{{asset('/uploads/'.$prod->image)}}" width=60 height=50/>
            </td>
            <td><a href="/editproduct/{{$prod->id}}" class="btn btn-info">Edit</a>
                <a href="javascript:void(0)" cid="{{$prod->id}}" class="btn btn-danger delpro">Delete</a></td>
        </tr>
        @php 
       $sn++;
      @endphp
      @endforeach
  </table>
@endsection 