@extends('master')

@section('container-content')
<div id="wrapper" class="wine">
	<section id="mainBody" data-ng-controller="searchWineController">
		<ul>
		    <li ng-repeat="variety in varieties">
		      <span>[[variety.variety_name]]</span>
		    </li>
		</ul>
	</section>
</div>

@stop

@section('script')
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
{{HTML::script('packages/angularjs/js/app.js')}}
{{HTML::script('packages/angularjs/js/controllers.js')}}
{{HTML::script('packages/angularjs/js/directives.js')}}
@stop