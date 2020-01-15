<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- sweetalert -->
    <link href="{{ URL::asset('css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Main CSS-->    
    <link href="{{ URL::asset('css/main-login.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font-icon css-->
    <link href="{{ URL::asset('font-awesome/css/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css" />
    <title>News</title>
</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1>News</h1>
        </div>
        <div class="login-box">
            <form method="POST" action="{{ route('login') }}" autocomplete="off" class="login-form">
                @csrf
                <h3 class="login-head">
                   
                    เข้าสู่ระบบ
                </h3>
                <div class="form-group">
                    <label class="control-label">Username</label>
                    <input type="text" name="username" value="" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" autocomplete="off" placeholder="Username">
                </div>
                <div class="form-group">
                    <label class="control-label">Password</label>
                    <input type="password" name="password" value="" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" autocomplete="off" placeholder="Password">
                </div>               
                <div class="form-group btn-container">
                    <button class="btn btn-success btn-block">
                        <i class="fa fa-sign-in fa-lg fa-fw"></i>
                        <center> <p>ตกลง</p>  </center>
                    </button>
                </div>
            </form>
        </div>
    </section>
     
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    
    <script src="{{ URL::asset('js/sweetalert2.all.min.js') }}"></script>
     
</body>

</html>
