@extends('layouts/master')
@section('content')
    
          
            <div class="row">
                <div class="offset-sm-4 col-sm-4">
                    <header class="wrap-title">
                        <h1 class="page-title">Inscription</h1>
                        <ol class="breadcrumb hidden-xs">
                            <li><a href="#">Pages</a></li>
                            <li class="active">Inscription</li>
                        </ol>
                    </header>
                    <div class="center-block logig-form">
                <div class="panel panel-default">
                    <div class="panel-heading">Formulaire d'inscription</div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <div class="input-group login-input">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                </div>
                                <br>
                                <div class="input-group login-input">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <select class="form-control" name="sex">
                                        <option value="M">Masculin</option>
                                        <option value="F">Féminin</option>
                                    </select>
                                </div>
                                <br>
                                <div class="input-group login-input">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <br>
                                <div class="input-group login-input">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="password_2" class="form-control" placeholder="Confirm Password">
                                </div>
                                <br>
                                <div class="input-group login-input">
                                    <span class="input-group-addon"><i class="fa fa-mail"></i></span>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <hr>
                                <a href="#" class="btn btn-success pull-right">Créer Compte</a>

                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>            
        </div> <!-- container  -->

@stop