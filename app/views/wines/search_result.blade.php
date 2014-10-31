@foreach($wines as $wine)
<div class="row wine-info-list">
	<div class="col-xs-2 col-sm-2 col-md-2 wine-info-list-pic">
	  	{{HTML::action_image('WinesController@getWine', array($wine->product_code), array('class'=>'resultTemplate_link'), 'uploads/images/wines/260/'.$wine->image_path, $wine->product_code, array('class'=>'resultTemplate_img img-responsive'))}}
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 wine-info-list-description">
		<div class="resultTemplate_label">
		{{HTML::linkAction('WinesController@getWine',$wine->wine_name, array($wine->product_code), array('class'=>'resultTemplate_label'))}}
		</div>
		{{HTML::ul($wine->wineDetail->USP,array('class'=>'resultTemplate_usp'))}}
	</div>
	<div class="col-xs-4 col-sm-4 col-md-4 wine-info-list-price">
		<div class="row resultTemplate_price">
			<div class="col-sm-9 priceRight">
				@if($wine->discount_price)
					<span class="row price-was">{{{"Was "}}}<del>{{$wine->package_price}}</del></span>
					<span class="row price-now">{{"Now ".$wine->package_discount_price}}</span>
					<span class="row price-save">{{"Save ".$wine->package_save_amount}}</span>
					<span class="row price-bottle">{{$wine->bottle_discount_price." a bottle"}}</span>
				@else
					<span class="row price-now">{{"Now ".$wine->package_price}}</span>
					<span class="row price-bottle">{{$wine->bottle_price." a bottle"}}</span>
				@endif
			</div>
		</div>
		<div class="row add-to-cart">
			<div class="row">
				<h6 class="package-size badge">{{"X".$wine->package_size}}</h6>
				{{ Form::selectRange('selectQuantity', 1, 10, 1, array('class'=>'amount-select-box')) }}
			</div>
			<div class="row">
			</div>
			<div class="row">
				{{ Form::button("Add To Cart <span class='glyphicon glyphicon-chevron-right'></span>", array('class'=>'btn btn-warning btn-responsive')) }}
			</div>
		</div>
	</div>
</div>
@endforeach
{{ $wines->links() }}