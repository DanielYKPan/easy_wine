@extends('master')

@section('container-content')
<div id="wrapper" class="account">
	<section id="mainBody">
		<div id="registerResult" class="formWrapper">
			<div class="breadcrumb">Needed To Be Modified Area</div>
			<h1>Thanks for registering</h1>
			<p>You have successfully registered.</p><br>
			{{HTML::linkAction('UsersController@getLogin', 'Login Now >', array(), array('class'=>'btn btn-primary btn-responsive', 'role'=>'button', 'id'=>'btn-login'))}}
		</div>
	</section>
</div>
@stop