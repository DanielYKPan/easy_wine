@extends('master')

@section('container-content')
	<div class="wrapper" id="catalogue">
		<section id="mainBody" class="specific-product">
			<div class="product-inform">
				<section class="product-basic-inform col-sm-6 col-md-6">
					<div class="bottle-price">
						@if($wine->discount_price)
							<span class="bottle-price-was"><del>${{$wine->price}}</del></span>
							<span class="bottle-price-now">${{$wine->discount_price}}</span>
						@else
							<span class="bottle-price-now">${{$wine->price}}</span>
						@endif
						<h6>a bottle</h6>
					</div>
					<div class="product-usp">
						{{HTML::ul($wine->wineDetail->USP)}}
					</div>
					{{HTML::image('uploads/images/wines/originals/'.$wine->image_path, $wine->wine_name, array('class'=>'product-image'))}}
				</section>
				<section class="product-detail-inform col-sm-6 col-md-6">
					<h4 class="product-title">
						{{$wine->wine_name}}
						<span class="product-package-size">x{{$wine->package_size}}</span>
					</h4>
					@if($wine->discount_price)
					<h3 class="price-now">Now ${{($wine->discount_price*$wine->package_size)}}</h3>
					<h4 class="save-amount">Save ${{number_format((float)($wine->price-$wine->discount_price)*$wine->package_size, 2, '.', '');}}</h4>
					@else
					<h3 class="price-now">Now ${{($wine->price*$wine->package_size)}}</h3>
					@endif
					<h5>{{$wine->availability_message}}</h5>
					<div class="add-to-cart">
						{{ Form::selectRange('selectQuantity', 1, 10, 1) }}
						{{ Form::button("Add To Cart <span class='glyphicon glyphicon-chevron-right'></span>", array('class'=>'btn btn-warning btn-responsive')) }}
					</div>
					<div class="product-code">{{"Product Code: ".$wine->product_code}}</div>
					<div class="product-description">{{$wine->wineDetail->description}}</div>
					<section class="accordion taste-note">
						<div class="accordion-header">
							<h4>
								{{{"Tasting note"}}}
								<span class="accordion-icon glyphicon glyphicon-plus-sign"></span>
							</h4>
						</div>
						<div class="accordion-body taste-note-items collapse">
							@if($wine->wineDetail->award)
							<div>
								<h6>Awards</h6>
								<p>{{$wine->wineDetail->award}}</p>
							</div>
							@endif
							<div>
								<h6>Regions</h6>
								<p>{{$wine->region_country}}</p>
							</div>
							<div>
								<h6>Drink Until</h6>
								<p>{{$wine->wineDetail->drink_until}}</p>
							</div>
							<div>
								<h6>Varieties</h6>
								<p>{{$wine->varieties_string}}</p>
							</div>
							<div>
								<h6>Alcohol</h6>
								<p>{{$wine->wineDetail->alcohol}}</p>
							</div>
							<div>
								<h6>Foods</h6>
								<p>{{$wine->wineDetail->foods}}</p>
							</div>
							<div>
								<h6>Oak</h6>
								<p>{{$wine->wineDetail->oak}}</p>
							</div>
							<div>
								<h6>Colour</h6>
								<p>{{$wine->wineDetail->colour}}</p>
							</div>
							<div>
								<h6>Nose</h6>
								<p>{{$wine->wineDetail->nose}}</p>
							</div>
							<div>
								<h6>Palate</h6>
								<p>{{$wine->wineDetail->palate}}</p>
							</div>
							<div>
								<h6>Background</h6>
								<p>{{$wine->wineDetail->background}}</p>
							</div>					
						</div>
					</section>
				</section>
			</div>
		</section>
	</div>
@stop

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('.accordion-icon').on('click', function(){
			var toggleBody = $(this).parents('.accordion').find('.accordion-body');
			toggleBody.collapse('toggle');
		});

		$('.accordion-body').on('hidden.bs.collapse', function () {
			var icon = $(this).parents('.accordion').find('.accordion-icon');
			icon.removeClass('glyphicon-minus-sign');
			icon.addClass('glyphicon-plus-sign');
		});

		$('.accordion-body').on('shown.bs.collapse', function () {
			var icon = $(this).parents('.accordion').find('.accordion-icon');
			icon.removeClass('glyphicon-plus-sign');
			icon.addClass('glyphicon-minus-sign');
		});
	});
</script>
@stop
