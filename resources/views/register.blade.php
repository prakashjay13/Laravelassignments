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
    <h3 class="text-center"><b>User Registration</b></h3>
    @if(Session::has('success'))
    <label class="alert alert-success"> {{Session::get('success')}}</label>
    @endif
    @if(Session::has('error'))
    <label class="alert alert-success"> {{Session::get('error')}}</label>
    @endif
    <div class="container">
        <form method="post" action="{{url('/sendposts')}}" enctype="multipart/form-data">
            @csrf()
            <div class="form-group">
                <label>Name:</label>
                @if($errors->has('name'))
                <label class="alert alert-danger">{{$errors->first('name')}}</label>
                @endif
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email:</label>
                @if($errors->has('email'))
                <label class="alert alert-danger">{{$errors->first('email')}}</label>
                @endif

                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Password:</label>
                @if($errors->has('password'))
                <label class="alert alert-danger">{{$errors->first('password')}}</label>
                @endif

                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
                <label>Phone:</label>
                @if($errors->has('phone'))
                <label class="alert alert-danger">{{$errors->first('phone')}}</label>
                @endif

                <input type="text" name="phone" class="form-control">
            </div>


            <div class="form-group">
                <label>City:</label>
                @if($errors->has('city'))
                <label class="alert alert-danger">{{$errors->first('city')}}</label>
                @endif

                <input type="text" name="city" class="form-control">
            </div>

            <div class="form-group">
                <label>Age:</label>
                @if($errors->has('age'))
                <label class="alert alert-danger">{{$errors->first('age')}}</label>
                @endif

                <input type="text" name="age" class="form-control">
            </div>

            <div class="form-group">
                <label>Gender:</label>
                @if($errors->has('gender'))
                <label class="alert alert-danger">{{$errors->first('gender')}}</label>
                @endif

                <input type="text" name="gender" class="form-control">
            </div>

            <div class="form-group">
                <label>Upload Image:</label>
                @if($errors->has('file'))
                <label class="alert alert-danger">{{$errors->first('file')}}</label>
                @endif

                <input type="file" name="file" class="form-control">
            </div><br>
            <div>
                <input type="submit" name="sub" value="Submit" class="btn btn-success">
                <a class="btn btn-warning" href="/login">Login</a>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>