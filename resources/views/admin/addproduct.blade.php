@extends('admin.master')
@section('content')
<div class="mt-5">
  <h1 class="text-center"> Add Products </h1>
</div>
  <form  method="post" action="/postaddproduct" enctype="multipart/form-data">
  @csrf()  
  @if(Session::has('error'))  
  <div class="alert alert-danger">{{Session::get('error')}}</div>
  @endif

  <div class="form-group">
          <label>Cid</label>
          <input type="text" class="form-control" name="cid"/>
          @if($errors->has('cid'))
            {{$errors->first('cid')}}
          @endif
      </div>

  <div class="form-group">
          <label>Name</label>
          <select name="pname" class="form-control">
    <option value="category">Choose Category</option>
    <option value="realme">Realme</option>
    <option value="oppo">Oppo</option>
    <option value="lenovo">Lenovo</option>
    <option value="sandisk">SanDisk</option>
    <option value="sony">Sony</option>
  </select>
          @if($errors->has('pname'))
            {{$errors->first('pname')}}
          @endif
      </div>

      <div class="form-group">
          <label>Price</label>
          <input type="text" class="form-control" name="price"/>
          @if($errors->has('price'))
            {{$errors->first('price')}}
          @endif
          
      </div>

      <div class="form-group">
          <label>Quantity</label>
          <input type="number" class="form-control" name="quantity" min="1" max="5">
          @if($errors->has('quantity'))
            {{$errors->first('quantity')}}
          @endif
          
      </div>

      <div class="form-group">
          <label>Features</label>
          <textarea name="features" class="form-control"></textarea>
          @if($errors->has('features'))
            {{$errors->first('features')}}
          @endif
      </div>

      <div class="form-group">
          <label>Image</label>
          <input type="file" class="form-control" name="file"/>
          @if($errors->has('file'))
            {{$errors->first('file')}}
          @endif
          
      </div>
<input type="submit" value="Submit" class="btn btn-success">
  </form>
@endsection