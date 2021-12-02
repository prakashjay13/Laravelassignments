<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <main>
        <header class="jumbotron">
            <h1 class="text-center">User Login</h1>
        </header>
        <section class="container">
            @if(Session::has('success'))
            <label class="alert alert-success"> {{Session::get('success')}}</label>
            @endif
            @if(Session::has('error'))
            <label class="alert alert-success"> {{Session::get('error')}}</label>
            @endif
            <div class="container">
                <form method="post" action="{{url('/view')}}">
                    @csrf()

                    <div class="form-group">
                        <label>Email</label>
                        @if($errors->has('email'))
                        <label class="alert alert-danger">{{$errors->first('email')}}</label>
                        @endif
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        @if($errors->has('password'))
                        <label class="alert alert-danger">{{$errors->first('password')}}</label>
                        @endif

                        <input type="password" name="password" class="form-control">
                    </div>


                    <div><br>
                        <input type="submit" name="sub" value="Submit" class="btn btn-success">
                        <a class="btn btn-warning" href="/register">New user?</a>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>

</html>