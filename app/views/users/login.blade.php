@extends('master')

@section('style')
@stop
@section('container-content')
	<div id="wrapper" class="account">
		<section id="mainBody">
			<div id="login" class="login" data-ng-controller="loginFormController">
				<div class="row">
					{{Form::open(array('action'=>'UsersController@postLogin', 'id'=>'login_form', 'name'=>'loginForm', 'data-ng-submit'=>'submitForm(loginForm.$valid)', 'novalidate'))}}
					<section class="existing-customers-box col-sm-6 col-md-6">
						<header class="login-form-header">{{{"Existing customer?"}}}</header>
						<div class="panel panel-default existing-skin">
							<div class="panel-body">
								<div class="form-group" data-ng-class="{ 'has-error' : loginForm.email.$invalid && !loginForm.email.$pristine }">
								    {{Form::label('email', 'Email:', array('for'=>'login-email-input'))}}
								    {{Form::email('email', Input::old('email'), array('placeholder'=>'Enter Email Address', 'class'=>'form-control', 'id'=>'login-email-input', 'data-ng-model'=>'email', 'required'))}}
								    {{$errors->first('email','<p class="field-validation-error">:message</p>')}}
								    <p data-ng-show="loginForm.email.$invalid && !loginForm.email.$pristine" class="help-block">Enter a valid email.</p>
								</div>
								<div class="form-group" data-ng-class="{ 'has-error' : loginForm.password.$invalid && !loginForm.password.$pristine }">
								    {{Form::label('password', 'Password:', array('for'=>'login-password-input'))}}
								    {{Form::password('password', array('placeholder'=>'Enter Password', 'class'=>'form-control', 'id'=>'login-password-input', 'data-ng-model'=>'password', 'required'))}}
								    {{$errors->first('password','<p class="field-validation-error">:message</p>')}}
								    <p data-ng-show="loginForm.password.$invalid && !loginForm.password.$pristine" class="help-block">Enter a valid password.</p>
								</div>
								@if(Session::has('message'))
								<div class="field-validation-error">
									{{{Session::get('message')}}}
								</div>
								@endif
								<div class="form-group pull-right" id="signin-btnGroup">
									{{HTML::link('/password/remind', 'Forgotten my password?', array('class'=>'password-remind-link'))}}
									{{Form::submit('Sign in',array('class'=>'btn btn-warning text-uppercase btn-sign-in', 'data-ng-disabled'=>'loginForm.$invalid'))}}
								</div>
							</div>
						</div>
					</section>
					{{Form::close()}}
				</div>
			</div>
		</section>
	</div>
@stop

@section('script')

@stop