@extends('dashboard/layouts/master')
@section('container')
<div class="container">
	<section class="content">
		<div class="row">
			<div class="col-md-7 col-md-offset-2 col-sm-8 col-sm-offset-2">
				<form method="POST" action="">
					@csrf
				    <div class="box-header">
				        <h4 class="">Ajouter Un Nouveau Personnel</h3>
				    </div>
		    		<div class="box-body">
				        <div class="form-group">
				        	<label>Nom & Prénom</label>
					        <div class="input-group">
					            <div class="input-group-addon">
					            	<i class="fa fa-user"></i>
					            </div>
					          <input type="text" class="form-control" d data-mask/>
					        </div>
	      				</div>
				      	<div class="form-group">
					        <label>Sexe</label>
					        <div class="input-group">
					            <div class="input-group-addon">
					            	<i class="fa fa-male"></i>
					            </div>
						          	<select class="form-control">
						            <option value="mas">Masculin</option>
						            <option value="fem">Féminin</option>
					          	</select>
					        </div>
				        </div>
				        <div class="form-group">
		                    <label>Date Naissance</label>
		                    <div class="input-group">
		                        <div class="input-group-addon">
		                       	   <i class="fa fa-calendar"></i>
		                        </div>
		                        <input type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                    		</div>
              			</div>
				      	<div class="form-group">
		                    <label>Téléphone</label>
		                    <div class="input-group">
		                      <div class="input-group-addon">
		                        <i class="fa fa-phone"></i>
		                      </div>
		                      <input type="text" class="form-control" data-inputmask='"mask": "(+999) 99-99-99-99"' data-mask/>
		                    </div>
                    	</div>
                    	<div class="form-group">
				        	<label>Email</label>
					        <div class="input-group">
					            <div class="input-group-addon">
					            	<i class="fa fa-envelope"></i>
					            </div>
					          <input type="email" placeholder="Email" class="form-control" d data-mask/>
					        </div>
	      				</div>
                  		<div class="form-group">
					        <label>Role</label>
					        <div class="input-group">
					            <div class="input-group-addon">
					            	<i class="fa fa-male"></i>
					            </div>
						          	<select class="form-control">
						          		@foreach($roles as $role)
						            		<option value="{{ $role->id }}">{{ $role->role }}</option>
					            		@endforeach
					          	</select>
					        </div>
				        </div>
                  		<div class="form-group">
		                    <label>Password</label>
		                    <div class="input-group">
		                      <div class="input-group-addon">
		                        <i class="fa fa-key"></i>
		                      </div>
		                      <input type="password" class="form-control"/>
		                    </div>
                    	</div>
                    	<div class="form-group">
		                    <div class="input-group">
		                      <div class="input-group-addon">
		                        <i class="fa fa-key"></i>
		                      </div>
		                      <input type="password" class="form-control"/>
		                    </div>
                    	</div>
				      	<button class="btn btn-block btn-primary">Créer Le Personnel</button>
		     		</div>
				</form> 	
			</div>
		</div>
	</section>
</div>
@stop