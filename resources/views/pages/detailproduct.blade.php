@extends('layouts/default')

@section('content')
<div class="container">
	<section class="product-datail">
		<div class="row first-line">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<img src="{{ asset($product->urlImage) }}" alt="..." class="img-thumbnail imadet">
				<br>
				@if($product->features)
					<h4><span class="caract">Caractéristique:</span> {{$product->features}}</h4>
				@else
					{{'pas de caractéristique'}}
				@endif
			</div>
			<div class="col-md-6" style="text-align: center;">
				<div class="text-color">
					<h2><span class="descript">Description :</span> </h2>
					<div class="dropdown-divider"></div>
					<p>{{$product->description}}</p>
				</div>
				<div class="add-cart">
					<button class="btn btn-info">Ajouter au panier</button>
				</div>
			</div>
		</div>
	</section>
	<hr>
	<section class="plus-detail">
		<h3>Plus Articles</h3>
		<div class="row">
			@foreach($products as $product)
				<div class="col-md-3  col-sm-4 col-xs-12 image">
					<a href="{{route('show', $product->id)}}">
						<img src="../{{$product->urlImage }}" alt="..." class="img-thumbnail">
					</a>
				</div>

			@endforeach
		</div>
	</section>
</div>
@endsection