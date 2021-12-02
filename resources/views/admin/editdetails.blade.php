@extends('admin.master')
@section('content')
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Register</title>
</head>

<body>
    <h3 class="text-center"><b>Edit Details</b></h3>
    @if(Session::has('success'))
    <label class="alert alert-success"> {{Session::get('success')}}</label>
    @endif
    @if(Session::has('error'))
    <label class="alert alert-success"> {{Session::get('error')}}</label>
    @endif
    <div class="container">
        <form method="post" action="{{url('/editd')}}" >
            @csrf()
            <div class="form-group">
                <label>Name:</label>
                @if($errors->has('name'))
                <label class="alert alert-danger">{{$errors->first('name')}}</label>
                @endif
                <input type="text" name="name" value="{{session('sid')->name}}" class="form-control">
            </div>
            <div class="form-group">
                <label>Email:</label>
                @if($errors->has('email'))
                <label class="alert alert-danger">{{$errors->first('email')}}</label>
                @endif

                <input type="text" name="email" value="{{session('sid')->email}}" class="form-control">
            </div>
            

            <div class="form-group">
                <label>Phone:</label>
                @if($errors->has('city'))
                <label class="alert alert-danger">{{$errors->first('phone')}}</label>
                @endif

                <input type="text" name="phone" value="{{session('sid')->phone}}" class="form-control">
            </div>


            <div class="form-group">
                <label>City:</label>
                @if($errors->has('city'))
                <label class="alert alert-danger">{{$errors->first('city')}}</label>
                @endif

                <input type="text" name="city" value="{{session('sid')->city}}" class="form-control">
            </div>

            <div class="form-group">
                <label>Age:</label>
                @if($errors->has('age'))
                <label class="alert alert-danger">{{$errors->first('age')}}</label>
                @endif

                <input type="text" name="age" value="{{session('sid')->age}}" class="form-control">
            </div>

            <div class="form-group">
                <label>Gender:</label>
                @if($errors->has('gender'))
                <label class="alert alert-danger">{{$errors->first('gender')}}</label>
                @endif

                <input type="text" name="gender" value="{{session('sid')->gender}}" class="form-control">
            </div>

            
            <div>
                <input type="submit" name="sub" value="Update" class="btn btn-success">
                
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>
@stop