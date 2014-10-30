@extends('master')

@section('container-content')
	<div id="wrapper" class="wine">
		<section id="mainBody">
			<div class="wines-content row">
				<div class="col-sm-4 col-md-4 search-container" id="rules-search-container">
					<div class="col-xs-4 col-sm-8 col-md-8">
						rule1
					</div>
					<div class="col-xs-4 col-sm-8 col-md-8">
						rule1
					</div>
					<div class="col-xs-4 col-sm-8 col-md-8">
						rule1
					</div>
					<div class="col-xs-4 col-sm-8 col-md-8">
						rule1
					</div>
					<div class="col-xs-4 col-sm-8 col-md-8">
						rule1
					</div>
					<div class="col-xs-4 col-sm-8 col-md-8">
						rule1
					</div>
					<div class="col-xs-4 col-sm-8 col-md-8">
						rule1
					</div>
				</div>
				<div class="clearfix visible-xs-block"></div>
				<div class="col-sm-8 col-md-8 search-container" id="wines-search-container">
					<div id="pagingTopContainer" class="pagingContainer">
						<div class="pagingTemplate">
							<div class="pagingTemplate_qty">
								<div class="pagingTemplate_qtyAmount">{{$wines->getTotal()}}</div>
								{{{"Item(s)"}}}
							</div>
							<div class="pagingTemplate_sort">
								<div>{{{"Sort by"}}}</div>
								{{ Form::select('sort_wine', [
												"mostPopular" => "Most Popular",
												"declinePrice" => "Price (High to Low)",
												"increasePrice" => "Price (Low to High)",
												"ascendName" => "Name Ascending",
												"descendName" => "Name Descending"],
												 "mostPopular", ['class' => 'pagingTemplate_sortSelectBox']) }}
							</div>
							<div class="pagingTemplate_view">
								{{{"View"}}}
								<div class="pagingTemplate_viewIcon">
									<span class="glyphicon glyphicon-th active"></span>
									<span class="glyphicon glyphicon-th-list"></span>
								</div>
							</div>
						</div>
						<div class="pagingSeparator borderLine">
						</div>							
					</div>
					<div id="ajax-loading" style="display: none;">
				    	{{HTML::image('assets/imgs/theme/ajax-loader.gif')}}
					</div>
					<div id="wineResultsContainer" class="wineResultsContainer">
						{{$content}}
					</div>
				</div>
			</div>
		</section>
	</div>
@stop

@section('script')
<script type="text/javascript">
$(document).ready(function()
{	
	function getSortRule() {
		var sort = [];
		switch ($('.pagingTemplate_sortSelectBox').val()) {
			case "mostPopular" :
				sort['sort_name'] = "wines.created_at";
				sort['sort_order'] = "desc";
				break;
			case "declinePrice" :
				sort['sort_name'] = "wines.discount_price";
				sort['sort_order'] = "desc";
				break;
			case "increasePrice" :
				sort['sort_name'] = "wines.discount_price";
				sort['sort_order'] = "asc";
				break;
			case "ascendName" :
				sort['sort_name'] = "wines.wine_name";
				sort['sort_order'] = "asc";
				break;
			case "descendName" :
				sort['sort_name'] = "wines.wine_name";
				sort['sort_order'] = "desc";
				break;
			default :
				sort['sort_name'] = "wines.created_at";
				sort['sort_order'] = "desc";
		}
		return sort;
	}

	$(".wines-content").on('click', '.pagination a',function(event)
	{
		event.preventDefault();

		// get the required page URL
		var myurl = $(this).attr('href');

		var sort = getSortRule();

		// ajax request
		$.ajax(
		{
			url: myurl,
			type: "get",
			datatype: "html",
			data:{
					sort_name: sort['sort_name'],
					sort_order: sort['sort_order']
				},
			beforeSend: function(){
				// showing the loading icon before ajax happens
				$('#ajax-loading').show();
			}
		})
		.success(function(data){
			// hide the loading icon
			$('#ajax-loading').hide();

			// replace the result container content
			$("#wineResultsContainer").empty().html(data.html);

			// scrolling back to the top of the page
			$("html, body").animate({ scrollTop: 0 }, "slow");
		})

		.fail(function(jqXHR, ajaxOptions, thrownError){
			  alert('No response from server');
		});
		return false;
	});

	$(".wines-content").on('change', '.pagingTemplate_sortSelectBox', function(event){
		var myurl =  window.location.pathname;

		var sort = getSortRule();

		$.ajax({
			url:myurl,
			type:"get",
			datatype:"html",
			data:{
					sort_name: sort['sort_name'],
					sort_order: sort['sort_order']
				},
			beforeSend: function(){
				$('#ajax-loading').show();
			}
		})
		.success(function(data){
			$('#ajax-loading').hide();
			$('#wineResultsContainer').empty().html(data.html);
		})
		.fail(function(jqXHR, ajaxOptions, thrownError){
			  alert('No response from server');
		});
		return false;
	});
});
</script>
@stop