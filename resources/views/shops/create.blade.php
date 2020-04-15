@extends('layouts/default',['title' => 'creer boutique'])
@section('content')
<div class="container">
	<section class="content">
		<div class="row">
			<div class="col-md-7 col-md-offset-2 col-sm-8 col-sm-offset-2">
				<form method="POST" action="{{route('shops.store')}}">
					@csrf
				    <div class="box-header">
				        <h3 class="box-title">Créer sa  boutique</h3>
				    </div>
		    		<div class="box-body">
				        <div class="form-group {{$errors->has('shopName') ? 'has-error' : '' }}">
				        	<label for="shopName">Nom Boutique</label>
					        <div class="input-group">
					            <div class="input-group-addon">
					            	<i class="fa fa-pencil"></i>
					            </div>
					          <input type="text" id="shopName" name="shopName" class="form-control" d data-mask required="required" value="{{ old('shopName') }}" />
					        </div>
					        {!! $errors->first('shopName','<span class="help-block">:message</span>')!!}
	      				</div>
				      	<div class="form-group">
					        <label for="country">Pays</label>
					        <div class="input-group">
					            <div class="input-group-addon">
					            	<i class="fa  fa-fighter-jet"></i>
					            </div>
						          	<select class="form-control" id="country" name="country">
						            <option value="Bénin">Bénin</option>
						            <option value="Côte D'ivoire">Côte D'ivoire</option>
						            <option value="Niger">Niger</option>
						            <option value="Ghana">Ghana</option>
						            <option value="Nigeria">Nigeria</option>
					          	</select>
					        </div>
				        </div>
				      	<div class="form-group">
					        <label for="town">Ville</label>
					        <div class="input-group">
					            <div class="input-group-addon">
					             	<i class="fa  fa-home"></i>
					            </div>
					          	<select class="form-control" id="town" name="town">
					                <option value="Bénin">Cotonou</option>
					                <option value="Côte D'ivoire">Abomey-calavi</option>
					                <option value="Niger">Porto-Nono</option>
					                <option value="Ghana">Dassa</option>
					                <option value="Nigeria">Parakou</option>
					          	</select>
					        </div>
				      	</div>
				      	<div class="form-group {{$errors->has('domain') ? 'has-error' : '' }}">
					        <label for="domain">
					        	Votre Boutique intervient dans quel domaine ?
					        </label>
					        <div class="input-group">
					            <div class="input-group-addon">
					            	<i class="fa fa-map-marker"></i>
					            </div>
					            <input type="text" id="domain" name="domain" class="form-control" required="required" value="{{ old('domain') }}" placeholder="Ex : Tous | Prêt à porter | Divers en Gros | Produit agricole..." />
					        </div>
					        {!! $errors->first('domain','<span class="help-block">:message</span>')!!}
				      	</div>
				      	<div class="form-group {{$errors->has('adress') ? 'has-error' : '' }}">
					        <label for="adress">Adresse Boutique</label>
					        <div class="input-group">
						          	<div class="input-group-addon">
						            	<i class="fa  fa-pencil-square-o"></i>
						          	</div>
					          	<input type="text" id="adress" name="adress" class="form-control" required="required" value="{{ old('adress') }}" placeholder="Ex : quartier, maison" />
					        </div>
					        {!! $errors->first('adress','<span class="help-block">:message</span>')!!}
				      	</div>
				      	<button type="submit" class="btn btn-block btn-primary">Créer Boutique &raquo;</button>
		     		</div>
				</form> 	
			</div>
		</div>
	</section>
</div>
@stop