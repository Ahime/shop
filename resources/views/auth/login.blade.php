<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{{ isset($title) ? $title. ' | ':'' }}Ahime</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="stylesheet" href="{{ asset('storage/bootstrap/css/bootstrap.min.css') }}">
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('storage/css/default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('storage/css/default.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('storage/plugins/iCheck/square/blue.css') }}">
   
    </head>
    <body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('index') }}"><b>Ahimê<span class="text-info">Shop</span></b></a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Se connectez-vous pour commencer votre session</p>
            <form action="{{ route('login') }}" method="POST">
                    @csrf
                <div class="form-group has-feedback {{$errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" class="form-control" placeholder="Identifiant" name="email" value="{{ old('email') }}"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback {{$errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="Password" name="password" />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-md-7">    
                        <div class="checkbox icheck">
                            <label>
                              <input type="checkbox"> Se souvenir de moi
                            </label>
                        </div>                        
                    </div>
                    <div class="col-xs-4 col-md-5">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Se connecter</button>
                    </div>
                </div>
            </form>
            <div class="social-auth-links text-center">
              <p>- OU SE CONNECTER PAR-</p>
              <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Mon compte gmail google +</a>
            </div>

            <a href="#">Mot de passe oublié</a><br>
            <p>
                J'ai pas un compte <a href="{{ route('users.create') }}" class="text-center">M'inscrire Maintenant</a>
                
            </p>
            

        </div>
    </div>

    <script src="{{ asset('storage/plugins/jQuery/jQuery-2.1.3.min.js')}}"></script>
    <script src="{{ asset('storage/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('storage/plugins/iCheck/icheck.min.js')}}"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
    @include('flashy::message')
</body>
</html>