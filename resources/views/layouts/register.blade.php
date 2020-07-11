<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lavila |</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('frontend')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('frontend')}}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ asset('frontend')}}/dist/css/loginamb.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition login-page loginamb" >
        <div class="register-box">
            <div class="register-logo">
                <a href="{{route('home')}}"><b>Lavila </b> Register</a>
                </div>
            
                <div class="card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Register a new membership</p>
            
                    <form action="{{ route('register') }}" method="POST">  {{-- form awalll register--}}
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Full name" name="name" value="{{old('name')}}" required autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    @if ($errors->has('name'))
                    <div class="invalid-feedback">
                        {{$errors->first('name')}}
                    </div>
                    @endif
                </div>


                    <div class="input-group mb-3">
                        <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email" name="email" value="{{old('email')}}" required>
                        
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @if ($errors->has('email'))
                    <div class="invalid-feedback">
                        {{$errors->first('email')}}
                    </div>
                    @endif
                    </div>


                    <div class="input-group mb-3">
                        <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" name="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @if ($errors->has('password'))
                        <div class="invalid-feedback">
                            {{$errors->first('password')}}
                        </div>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" placeholder="Retype password" name="password_confirmation" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @if ($errors->has('password_confirmation'))
                        <div class="invalid-feedback">
                            {{$errors->first('password_confirmation')}}
                        </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-8">
                        <div class="icheck-primary">
                        <input type="checkbox" class="{{$errors->has('terms') ? 'is_invalid' : ''}}" id="agreeTerms" name="terms" value="agree">
                        @if ($errors->has('terms'))
                        <div class="invalid-feedback">
                            {{$errors->first('terms')}}
                        </div>
                        @endif
                            <label for="agreeTerms">
                            I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    </form>
{{--             
                    <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                    </div> --}}
            
                    <a href="{{url('/login')}}" class="text-center">I already have a membership</a>
                </div>
                <!-- /.form-box -->
                </div><!-- /.card -->
            </div>
        <!-- /.login-box -->
        <!-- jQuery -->
<script src="{{ asset('frontend')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('frontend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('frontend')}}/dist/js/adminlte.min.js"></script>

</body>
</html>
