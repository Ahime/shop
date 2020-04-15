@extends('layouts/master')

@section('content')

<div class="container">
	
	<section class="section1">
		<h3>Prouits</h3>
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