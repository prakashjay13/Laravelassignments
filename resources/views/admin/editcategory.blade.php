@extends('admin.master')
@section('content')
<div class="mt-5">
  <h1 class="text-center"> Edit Category </h1>
</div>
  <form  method="post" action="/updatecategory" enctype="multipart/form-data">
  @csrf()  
  @if(Session::has('error'))  
  <div class="alert alert-danger">{{Session::get('error')}}</div>
  @endif
  <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" value="{{$catdata->name}}"/>
          @if($errors->has('name'))
            {{$errors->first('name')}}
          @endif
      </div>

      <div class="form-group">
          <label>Description</label>
          <textarea name="description" class="form-control">{{$catdata->description}}</textarea>
          @if($errors->has('description'))
            {{$errors->first('description')}}
          @endif
      </div>

      <div class="form-group">
          <label>Image</label>
          <input type="file" class="form-control" name="file"/>
          <img src="{{asset('/uploads/'.$catdata->image)}}" width="50" height="50"/>
          <input type="hidden" value="{{$catdata->id}}" name="id"/>
          @if($errors->has('file'))
            {{$errors->first('file')}}
          @endif
      </div>
<input type="submit" value="Submit" class="btn btn-success">
  </form>
@endsection