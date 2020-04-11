<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
    {{--  <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6">

              @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                  <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                  
              @endif

                <form class="form-horizontal" action="{{ route('blog-register.store') }}" method="POST">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label class="control-label col-lg-8" for="email">First Name:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="fname" value="{{old('fname')}}" placeholder="Enter First Name" name="fname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-8" for="email">Last Name:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="lname" value="{{old('lname')}}" placeholder="Enter Lastt Name" name="lname">
                        </div>
                      </div>
                    <div class="form-group">
                      <label class="control-label col-lg-8" for="email">Email:</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" value="{{old('email')}}" placeholder="Enter email" name="email">
                      </div>
                    </div>
                    <div class="form-group"> 
                      <label class="control-label col-lg-8" for="pwd">Password:</label>
                      <div class="col-sm-10">          
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-lg-8" for="pwd">Confirm Password:</label>
                      <div class="col-sm-10">          
                        <input type="password" class="form-control" id="cpwd" placeholder="Enter password " name="password_confirmation">
                      </div>
                    </div>
                    <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label><input type="checkbox" name="remember"> Remember me</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default btn-outline-dark btn-block">Submit</button>
                      </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>  --}}
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}</div>
  
                  <div class="card-body">
                      @isset($url)
                      <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                      @else
                      <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                      @endisset
                          @csrf
  
  </div>
  

    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>