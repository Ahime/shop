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
<body class="register-page">
        <div class="register-box">
        <div class="register-logo">
          <a href="{{ route('index') }}"><b>Ahimê<span class="text-info">Shop</span></b></a>
        </div>
    @if(Auth::guest())
        <div class="register-box-body">
            <p class="login-box-msg">Inscrivez-vous pour créer votre propre boutique </p>
                <form action="{{ route('users.store') }}" method="POST">
                      @csrf
                    <div class="form-group has-feedback {{$errors->has('username') ? 'has-error' : '' }} col-md-6">
                        <label for="username">Nom & Prénom</label>
                        <input type="text" class="form-control" placeholder="Ex : DEGLA yao Fabrice" value="{{ old('username') }}" name="username" />
                        {!! $errors->first('username','<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group has-feedback {{$errors->has('username') ? 'has-error' : '' }} col-md-6">
                        <label for="sex">Sexe</label>
                        <select class="form-control" name="sex" id="sex">
                            <option value="M">Masculin</option>
                            <option value="F">Féminin</option>
                        </select>
                         {!! $errors->first('sex','<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group has-feedback {{$errors->has('birthday') ? 'has-error' : '' }} col-md-6">
                        <label for="birthday">Date Naissance</label>
                        <input type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask id="birthday" name="birthday" value="{{ old('birthday') }}">
                        {!! $errors->first('birthday','<span class="help-block">:message</span>')!!} 
                    </div>

                    <div class="form-group has-feedback {{$errors->has('phone') ? 'has-error' : '' }} col-md-6">
                        <label for="phone">Téléphone</label>
                        <input type="text" class="form-control" placeholder="Ex : +225 67012331" id="phone" name="phone" value="{{ old('phone') }}"/>
                        {!! $errors->first('phone','<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group has-feedback {{$errors->has('bankingAccount') ? 'has-error' : '' }} col-md-6">
                        <label for="bankingAccount">Numéro de banque</label>
                        <input type="text" class="form-control" placeholder="Ex : BOA/ 01 214 122 784 457" id="bankingAccount" name="bankingAccount" value="{{ old('bankingAccount') }}"/>
                        {!! $errors->first('bankingAccount','<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group has-feedback {{$errors->has('email') ? 'has-error' : '' }} col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Ex : adress@gamil.com" id="email" name="email" value="{{ old('email') }}"/>
                        {!! $errors->first('email','<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group has-feedback {{$errors->has('password') ? 'has-error' : '' }} col-md-6">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
                        {!! $errors->first('password','<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group has-feedback  {{$errors->has('password_confirmation') ? 'has-error' : '' }} col-md-6">
                    		<label for="password_confirmation">Confirmer Mot de passe</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}"  placeholder="Confirmer votre mot de passe">
                        {!! $errors->first('password_confirmation','<span class="help-block">:message</span>')!!}
                  	</div>

                    <div class="row">
                        <div class="col-xs-8">    
                          <div class="checkbox icheck">
                            <label>
                              <input type="checkbox"> Je consens aux <a href="#">termes</a>
                            </label>
                          </div>                        
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                          <button type="submit" class="btn btn-primary btn-block btn-flat">Inscription</button>
                        </div><!-- /.col -->
                    </div>
                </form>        

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Se connecter par Google+</a>
                </div>

                J'ai déjà un compte ahimeShop <a href="{{ route('login-form') }}" class="text-center">Se connecter</a>
            </div>
        @else
        <div class="register-box-body">
            <p class="login-box-msg">Ajouter un nouveau utilisateur</p>
                <form action="{{ route('users.store') }}" method="POST">
                      @csrf
                    <div class="form-group has-feedback {{$errors->has('username') ? 'has-error' : '' }} col-md-6">
                        <label for="username">Nom & Prénom</label>
                        <input type="text" class="form-control" placeholder="Ex : DEGLA yao Fabrice" value="{{ old('username') }}" name="username" />
                        {!! $errors->first('username','<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group has-feedback col-md-6">
                        <label for="sex">Sexe</label>
                        <select class="form-control" name="sex" id="sex">
                            <option value="M">Masculin</option>
                            <option value="F">Féminin</option>
                        </select>
                    </div>

                    <div class="form-group has-feedback {{$errors->has('birthday') ? 'has-error' : '' }} col-md-6">
                        <label for="birthday">Date Naissance</label>
                        <input type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask id="birthday" name="birthday" value="{{ old('birthday') }}">
                        {!! $errors->first('birthday','<span class="help-block">:message</span>')!!} 
                    </div>

                    <div class="form-group has-feedback {{$errors->has('phone') ? 'has-error' : '' }} col-md-6">
                        <label for="phone">Téléphone</label>
                        <input type="text" class="form-control" placeholder="Ex : +225 67012331" id="phone" name="phone" value="{{ old('phone') }}"/>
                        {!! $errors->first('phone','<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group has-feedback {{$errors->has('bankingAccount') ? 'has-error' : '' }} col-md-6">
                        <label for="bankingAccount">Numéro de banque</label>
                        <input type="text" class="form-control" placeholder="Ex : BOA/ 01 214 122 784 457" id="bankingAccount" name="bankingAccount" value="{{ old('bankingAccount') }}"/>
                        {!! $errors->first('bankingAccount','<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group has-feedback {{$errors->has('email') ? 'has-error' : '' }} col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Ex : adress@gamil.com" id="email" name="email" value="{{ old('email') }}"/>
                        {!! $errors->first('email','<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group has-feedback col-md-6">
                        <label for="sex">Role</label>
                        <select class="form-control" name="sex" id="sex">
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->role }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group has-feedback {{$errors->has('password') ? 'has-error' : '' }} col-md-6">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
                        {!! $errors->first('password','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="row">
                        <div class="col-xs-8">    
                          <div class="checkbox icheck">
                            <label>
                              <input type="checkbox"> Oui, lui definir les <a href="#">termes d'utilisations</a>
                            </label>
                          </div>                        
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                          <button type="submit" class="btn btn-primary btn-block btn-flat">Ajouter le personnel</button>
                        </div><!-- /.col -->
                    </div>
                </form>
            </div>
         @endif
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center">
                        Retour A l'<a href="{{ route(Auth::guest() ? 'index':'admin') }}">Accueil</a>
                    </h1>
                </div>
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
</body>
</html>