<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.head')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
</head>

<body>
    @include('admin.includes.nav')
    @if(Session::has('success'))
    <label class="alert alert-success"> {{Session::get('success')}}</label>
    @endif
    @if(Session::has('error'))
    <label class="alert alert-success"> {{Session::get('error')}}</label>
    @endif
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <form method="post" action="{{url('/userlogin')}}" class="mx-1 mx-md-4">
                                    @csrf()
                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Please enter your email and password!</p>

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" name="email" class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Email</label>
                                        @if($errors->has('email'))
                                        <label class="alert alert-danger">{{$errors->first('email')}}</label>
                                        @endif
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="typePasswordX">Password</label>
                                        @if($errors->has('password'))
                                        <label class="alert alert-danger">{{$errors->first('password')}}</label>
                                        @endif
                                    </div>


                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                    </div>

                            </div>
                            </form>
                            <div>
                                <p class="mb-0">Don't have an account? <a href="register" class="text-white-50 fw-bold">Sign Up</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('admin.includes.foot')
</body>

</html>