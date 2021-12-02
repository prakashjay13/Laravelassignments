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

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
   
                    <form method="POST" action="{{url('/chpass')}}" >
                        @csrf 
                        @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
   
                        @if(Session::has('error'))
                                <div class="alert alert-danger">{{Session::get('error')}}</div>
                        @endif
                        <div class="form-group row">
                            <label >Current Password</label>
  
                           
                                <input id="password" type="password" class="form-control" name="oldpass" autocomplete="current-password">
                         
                        </div>
  
                        <div class="form-group row">
                            <label for="password" c>New Password</label>
  
                                <input id="new_password" type="password" class="form-control" name="newpass" autocomplete="current-password">
                          
                        </div>
  
                        <div class="form-group row">
                            <label for="password" >New Confirm Password</label>
    
                       
                                <input id="new_confirm_password" type="password" class="form-control" name="cnewpass" autocomplete="current-password">
                            
                        </div>
   
                        
                                <button type="submit" class="btn btn-primary">
                                    Update Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>

@stop