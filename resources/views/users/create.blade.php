@extends('layouts/default',['title' => 'inscription'])
@section('content')
<div class="container">
	<section class="content">
		<div class="row">
			<div class="col-md-7 col-md-offset-2 col-sm-8 col-sm-offset-2">
				<form method="POST" action="{{ route('users.store') }}">
					@csrf
				    <div class="box-header">
				        <h4 class="">Inscrivez-vous Pour Devenir Actionnaire</h3>
				    </div>
		    		<div class="box-body">
				        <div class="form-group {{$errors->has('username') ? 'has-error' : '' }}">
				        	<label for="username">Nom & Prénom</label>
					        <div class="input-group">
					            <div class="input-group-addon">
					            	<i class="fa fa-user"></i>
					            </div>
					          <input type="text" class="form-control" d data-mask name="username" id="username" required="" value="{{ old('username') }}" placeholder="Entrez votre nom et prénom">
					        </div>
	      				</div>
				      	<div class="form-group {{$errors->has('sex') ? 'has-error' : '' }}">
					        <label for="sex">Sexe</label>
					        <div class="input-group">
					            <div class="input-group-addon">
					            	<i class="fa fa-male"></i>
					            </div>
						          	<select class="form-control" name="sex" id="sex">
						            <option value="M">Masculin</option>
						            <option value="F">Féminin</option>
					          	</select>
					        </div>
				        </div>
				        <div class="form-group {{$errors->has('birthday') ? 'has-error' : '' }}">
		                    <label for="birthday">Date Naissance</label>
		                    <div class="input-group">
		                        <div class="input-group-addon">
		                       	   <i class="fa fa-calendar"></i>
		                        </div>
		                        <input type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask id="birthday" name="birthday" value="{{ old('birthday') }}" required="">
                    		</div>
              			</div>
				      	<div class="form-group {{$errors->has('phone') ? 'has-error' : '' }}">
		                    <label for="phone">Téléphone</label>
		                    <div class="input-group">
		                      <div class="input-group-addon">
		                        <i class="fa fa-phone"></i>
		                      </div>
		                      <input type="text" name="phone" id="phone" class="form-control" data-inputmask='"mask": "(+999) 99-99-99-99"' data-mask required="" value="{{ old('phone') }}"  placeholder="Entrez votre numéro de téléphone">
		                    </div>
                    	</div>
                    	<div class="form-group {{$errors->has('bankingAccount') ? 'has-error' : '' }}">
		                    <label for="phone">Compte bancaire</label>
		                    <div class="input-group">
		                      <div class="input-group-addon">
		                        <i class="fa fa-phone"></i>
		                      </div>
		                      <input type="text" name="bankingAccount" id="bankingAccount" class="form-control" data-inputmask='"mask": "(+999) 99-99-99-99"' data-mask required="" value="{{ old('bankingAccount') }}"  placeholder="Entrez votre numéro de compte bancaire">
		                    </div>
                    	</div>
                    	<div class="form-group {{$errors->has('email') ? 'has-error' : '' }}">
				        	<label for="email">Email</label>
					        <div class="input-group">
					            <div class="input-group-addon">
					            	<i class="fa fa-envelope"></i>
					            </div>
					          <input type="email" name="email" placeholder="Email" class="form-control" d data-mask required="" value="{{ old('email') }}"  placeholder="Entrez votre adresse email">
					        </div>
	      				</div>
                  		<div class="form-group {{$errors->has('password') ? 'has-error' : '' }}">
		                    <label for="password">Mot de passe</label>
		                    <div class="input-group">
		                      <div class="input-group-addon">
		                        <i class="fa fa-key"></i>
		                      </div>
		                      <input type="password" class="form-control" name="password" required="" value="{{ old('password') }}"  placeholder="Entrez votre mot de passe">
		                    </div>
                    	</div>
                    	<div class="form-group {{$errors->has('password_confirmation') ? 'has-error' : '' }}">
                    		<label for="password_confirmation">Confirmer Mot de passe</label>
		                    <div class="input-group">
		                      <div class="input-group-addon">
		                        <i class="fa fa-key"></i>
		                      </div>
		                      <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required="" value="{{ old('password_confirmation') }}"  placeholder="Confirmer votre mot de passe">
		                    </div>
                    	</div>
				      	<button class="btn btn-block btn-primary" type="submit">Inscription</button>
		     		</div>
				</form>	
			</div>
		</div>
	</section>
</div>
@stop