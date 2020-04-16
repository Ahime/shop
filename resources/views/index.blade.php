@extends('layouts/default',['title' => 'Accueil'])
@section('content')
<div class="container">
	<div class="row first-line">
		<div class="col-md-6">
	      	<div class="box box-solid">
		        <div class="box-body">
		          	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			            <ol class="carousel-indicators">
			              	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			              	<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
			              	<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
			            </ol>
		            	<div class="carousel-inner">
		              		<div class="item active">
		                		<img src="{{asset('storage/img/Bootstrap1.png')}}" alt="First slide">
	                			<div class="carousel-caption">
	                  				First Slide
	                			</div>
	              			</div>
			              	<div class="item">
			                	<img src="{{asset('storage/img/Bootstrap2.png')}}" alt="Second slide">
			                	<div class="carousel-caption">
			                  		Second Slide
			                	</div>
			              	</div>
		              		<div class="item">
		                		<img src="{{asset('storage/img/Bootstrap3.png')}}" alt="Third slide">
	                			<div class="carousel-caption">
		                  			Third Slide
		                		</div>
		              		</div>
		            	</div>
		            	<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		              		<span class="fa fa-angle-left"></span>
		            	</a>
	            		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		              		<span class="fa fa-angle-right"></span>
		            	</a>
		          	</div>
		        </div>
	      	</div>
	    </div>

	    <div class="col-md-6">
              <!-- PRODUCT LIST -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Recently Added Products</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool visible-xs" data-widget="collapse"><i class="fa fa-minus visible-xs"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                    <li class="item">
                      <div class="product-img">
                        <img src="{{asset('storage/img/guitare.jpg')}}" alt="Product Image"/>
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">Guittare <span class="label label-info pull-right">$70</span></a>
                        <span class="product-description">
                          26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="{{asset('storage/img/th7.jpg')}}" alt="Product Image"/>
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">Villa <span class="label label-danger pull-right">$850</span></a>
                        <span class="product-description">
                          Xbox One Console Bundle with Halo Master Chief Collection.
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="{{asset('storage/img/Ph-derby-manet.jpg')}}" alt="Product Image"/>
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">PlayStation 4 <span class="label label-success pull-right">$99</span></a>
                        <span class="product-description">
                          PlayStation 4 500GB Console (PS4)
                        </span>
                      </div>
                    </li><!-- /.item -->
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript::;" class="uppercase">View All Products</a>
                </div><!-- /.box-footer -->
            </div><!-- /.box -->
        </div><!-- /.col -->
	</div>

	<section class="img-section">
		<h2>Nos articles</h2>
		<div class="row">
			@foreach($products as $product)
				<div class="col-md-3 col-sm-4 col-xs-12">
					<a href="{{route('show',$product->id)}}">
	            	<span class="mailbox-attachment-icon has-img">
	            		<img src="{{$product->urlImage}}" alt="image"/>
	            	</span>
	            	</a>
	            	<div class="mailbox-attachment-info" style="color: #000">
	                	<span>Prix : {{$product->price}} fcfa</span>
	                	<span style="float: right;"><a href="{{route('show',$product->id)}}">Details</a></span>
	                </div>
				</div>
			@endforeach
		</div>
	</section>
</div>
@endsection