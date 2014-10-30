@extends('master')

@section('container-content')
	<div id="wrapper" class="account">
		<section id="mainBody">
			<div id="register_form" data-ng-controller="registerFormController">
				<div class="register-heading">register</div>
				{{Form::open(array('action'=>'UsersController@postRegister', 'role'=>'form', 'class'=>'register_form', 'name'=>'registerForm', 'data-ng-submit'=>'submitForm(registerForm.$valid)', 'novalidate'))}}
				<div class="panel panel-default loginDetails">
					<div class="register-form-section-heading">
						{{HTML::link('/', '1', array('class'=>'number'))}}
						{{"Your Login Details"}}
					</div>
					<div class="panel-body account-form">
				      	<div id="loginDetailsPanel" class="col-sm-6 col-md-6">
					      	<div class="form-group" data-ng-class="{ 'has-error' : registerForm.email.$invalid && !registerForm.email.$pristine }">
							    {{Form::label('email', 'Email:', array('for'=>'email'))}}
							    {{Form::email('email', Input::old('email'), array('placeholder'=>'Enter Email Address', 'class'=>'form-control', 'data-ng-model'=>'email', 'required', 'email-unique'))}}
							    {{$errors->first('email','<p class="field-validation-error">:message</p>')}}
							    <p data-ng-show="registerForm.email.$error.required && !registerForm.email.$pristine" class="help-block">Enter a valid email.</p>
							    <p data-ng-show="registerForm.email.$error.email && !registerForm.email.$pristine" class="help-block">Enter a valid email.</p>
							    <p data-ng-show="registerForm.email.$error.emailUnique && !registerForm.email.$pristine && !registerForm.email.$error.required" class="help-block">This email has been registered</p>
							</div>
							<div class="form-group" data-ng-class="{ 'has-error' : registerForm.password.$invalid && !registerForm.password.$pristine }">
							    {{Form::label('password', 'Password:', array('for'=>'password'))}}
							    {{Form::password('password', array('placeholder'=>'Enter Password', 'class'=>'form-control', 'data-ng-model'=>'password', 'data-ng-minlength'=>6, 'data-ng-maxlength'=>20, 'required'))}}
							    {{$errors->first('password','<p class="field-validation-error">:message</p>')}}
							    <p data-ng-show="registerForm.password.$error.required && !registerForm.password.$pristine" class="help-block">Enter a valid password.</p>
							    <p data-ng-show="registerForm.password.$error.minlength || registerForm.password.$error.maxlength " class="help-block">Password must between 6 to 20 characters</p>
							</div>
							<div class='form-group' data-ng-class="{ 'has-error' : registerForm.password_confirmation.$invalid && !registerForm.password_confirmation.$pristine }">
								{{Form::label('password_confirmation', 'Password Confirm', array('class'=>'control-label'))}}
								{{Form::password('password_confirmation', array('placeholder'=>'Confirm Password', 'class'=>'form-control', 'data-ng-model'=>'password_confirmation', 'required', 'password-match'=>'password'))}}
								{{$errors->first('password_confirmation','<p class="field-validation-error">:message</p>')}}
							    <p data-ng-show="registerForm.password_confirmation.$error.required && !registerForm.password_confirmation.$pristine" class="help-block">Confrim password</p>
							    <p data-ng-show="registerForm.password_confirmation.$error.unique && !registerForm.password_confirmation.$pristine && !registerForm.password_confirmation.$error.required" class="help-block">Password don't match</p>
							</div>
				      	</div>
			        </div>
				</div>
				<div class="panel panel-default contactDetails">
					<div class="register-form-section-heading">
						{{HTML::link('/', '2', array('class'=>'number'))}}
						{{{"Your Contact Details"}}}
					</div>
					<div class="panel-body account-form">
						<div class="row">
							<div class="col-sm-3 col-md-4">
								<div class="form-group" data-ng-class="{ 'has-error' : registerForm.title.$invalid && !registerForm.title.$pristine }">
							  		{{Form::label('title', 'Title:', array('for'=>'title'))}}
							  		{{Form::select('title', [''=>'Please Select', 'Mr'=>'Mr', 'Mrs'=>'Mrs', 'Ms'=>'Ms', 'Miss'=>'Miss', 'Dr'=>'Dr'], '', ['name'=>'title','class'=>'form-control', 'data-ng-model'=>'title', 'required'])}}
							  		{{$errors->first('title','<p class="text-danger">:message</p>')}}
							  		<p data-ng-show="registerForm.title.$invalid && !registerForm.title.$pristine" class="help-block">{{{"Select Your Title"}}}</p>
							  	</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-md-4">
							  	<div class="form-group" data-ng-class="{ 'has-error' : registerForm.first_name.$invalid && !registerForm.first_name.$pristine }">
							    	{{Form::label('first_name', 'First Name:', array('for'=>'first_name'))}}
									{{Form::text('first_name', Input::old('first_name'), array('placeholder'=>'Enter Your First Name', 'class'=>'form-control', 'data-ng-model'=>'first_name','required', 'data-ng-pattern'=>'/^[A-Za-z0-9_-]+$/'))}}
									{{$errors->first('first_name','<p class="text-danger">:message</p>')}}
									<p data-ng-show="registerForm.first_name.$error.required && !registerForm.first_name.$pristine" class="help-block">{{{"Enter Your First Name"}}}</p>
									<p data-ng-show="registerForm.first_name.$error.pattern && !registerForm.first_name.$pristine" class="help-block">{{{"Your first name could only include alpha-numeric characters, as well as dashes and underscores."}}}</p>
							    </div>
							</div>
							<div class="col-sm-4 col-md-4">
							  	<div class="form-group" data-ng-class="{ 'has-error' : registerForm.last_name.$invalid && !registerForm.last_name.$pristine }">
							    	{{Form::label('last_name', 'Last Name:', array('for'=>'last_name'))}}
									{{Form::text('last_name', Input::old('last_name'), array('placeholder'=>'Enter Your Last Name', 'class'=>'form-control', 'data-ng-model'=>'last_name', 'required', 'data-ng-pattern'=>'/^[A-Za-z0-9_-]+$/'))}}
									{{$errors->first('last_name','<p class="text-danger">:message</p>')}}
									<p data-ng-show="registerForm.last_name.$error.required && !registerForm.last_name.$pristine" class="help-block">{{{"Enter Your Last Name"}}}</p>
									<p data-ng-show="registerForm.last_name.$error.pattern && !registerForm.last_name.$pristine" class="help-block">{{{"Your first name could only include alpha-numeric characters, as well as dashes and underscores."}}}</p>
							    </div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 col-md-4">
								<div class="form-group" data-ng-class="{ 'has-error' : registerForm.age.$invalid && !registerForm.age.$pristine }">
									{{Form::label('age', 'Age:', array('for'=>'age'))}}
									{{Form::select('age', [''=>'Please Select', 'Under 18'=>'Under 18', '18 - 29'=>'18 - 29', '30 - 39'=>'30 - 39', '40 - 49'=>'40 - 49', 'Over 50'=>'Over 50'], '', ['name'=>'age','class'=>'form-control', 'data-ng-model'=>'age', 'required'])}}
									{{$errors->first('age','<p class="text-danger">:message</p>')}}
									<p data-ng-show="registerForm.age.$invalid && !registerForm.age.$pristine" class="help-block">{{{"Select Your Age Group"}}}</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-7 col-md-7">
								<div class="form-group" data-ng-class="{ 'has-error' : registerForm.address.$invalid && !registerForm.address.$pristine }">
							    	{{Form::label('address', 'Address:', array('for'=>'address'))}}
									{{Form::text('address', Input::old('address'), array('placeholder'=>'Enter Your Address', 'class'=>'form-control', 'data-ng-model'=>'address', 'required'))}}
									{{$errors->first('address','<p class="text-danger">:messaddress</p>')}}
									<p data-ng-show="registerForm.address.$invalid && !registerForm.address.$pristine" class="help-block">{{{"Enter Your Detail Address"}}}</p>
						    	</div>
							</div>
						</div>
						<div id="contactPostPanel" class="row collapse in">
							<div class="col-sm-3 col-md-3">
								<div class="form-group" data-ng-class="{ 'has-error' : registerForm.suburb.$invalid && !registerForm.suburb.$pristine }">
									{{Form::label('suburb', 'Suburb:', array('for'=>'suburb'))}}
								{{Form::text('suburb', Input::old('suburb'), array('placeholder'=>'Enter Your Suburb', 'class'=>'form-control', 'data-ng-model'=>'suburb', 'required'))}}
								{{$errors->first('suburb','<p class="text-danger">:message</p>')}}
								<p data-ng-show="registerForm.suburb.$invalid && !registerForm.suburb.$pristine" class="help-block">{{{"Enter a valid suburb name"}}}</p>
								</div>
							</div>
							<div class="col-sm-2 col-md-2">
								<div class="form-group" data-ng-class="{ 'has-error' : registerForm.postcode.$invalid && !registerForm.postcode.$pristine }">
									{{Form::label('postcode', 'Postcode:', array('for'=>'postcode'))}}
								{{Form::text('postcode', Input::old('postcode'), array('placeholder'=>'Postcode', 'class'=>'form-control', 'data-ng-model'=>'postcode', 'required', 'data-ng-pattern'=>"/^(\d){4}$/"))}}
								{{$errors->first('postcode','<p class="text-danger">:message</p>')}}
								<p data-ng-show="registerForm.postcode.$invalid && !registerForm.postcode.$pristine" class="help-block">{{{"Enter a valid postcode"}}}</p>
								</div>
							</div>
							<div class="col-sm-3 col-md-3">
								<div class="form-group" data-ng-class="{ 'has-error' : registerForm.state.$invalid && !registerForm.state.$pristine }">
							  		{{Form::label('state', 'State:', array('for'=>'state'))}}
							  		{{Form::select('state', [''=>'Please Select', 'NSW'=>'New South Wales', 'Qld'=>'Queensland', 'SA'=>'South Australia', 'Tas'=>'Tasmania', 'Vic'=>'Victoria', 'WA'=>'Western Australia'], '', ['name'=>'state','class'=>'form-control', 'data-ng-model'=>'state', 'required'])}}
							  		{{$errors->first('state','<p class="text-danger">:message</p>')}}
							  		<p data-ng-show="registerForm.state.$invalid && !registerForm.state.$pristine" class="help-block">{{{"Enter a valid state name"}}}</p>
							  	</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-md-4">
							  	<div class="form-group">
							    	{{Form::label('company_name', 'Company Name:', array('for'=>'company_name'))}}
									{{Form::text('company_name', Input::old('company_name'), array('placeholder'=>'Enter Your Company Name', 'class'=>'form-control'))}}
							    </div>
							</div>
							<div class="col-sm-4 col-md-4">
								<div class="form-group" data-ng-class="{ 'has-error' : registerForm.contact_number.$invalid && !registerForm.contact_number.$pristine }">
							    	{{Form::label('contact_number', 'Contact Number:', array('for'=>'contact_number'))}}
									{{Form::text('contact_number', Input::old('contact_number'), array('placeholder'=>'Enter Your Contact Number', 'class'=>'form-control','data-ng-model'=>'contact_number', 'required', 'data-ng-pattern'=>"/^(\d)+$/"))}}
									{{$errors->first('contact_number','<p class="text-danger">:message</p>')}}
									<p data-ng-show="registerForm.contact_number.$invalid && !registerForm.contact_number.$pristine" class="help-block">{{{"Enter a valid contact number"}}}</p>
						    	</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default preferences">
					<div class="register-form-section-heading">
						{{HTML::link('/', '3', array('class'=>'number'))}}
						{{{"Preferences"}}}
					</div>
					<div class="panel-body account-form">
						<div class="row">
				      		{{{"What's happening, what's hot - direct to your inbox. Our email updates ensure you never miss out on the latest wines."}}}
				      	</div>
				      	<div class="row">
				      		<div class="col-sm-3 col-md-3">
				      			{{ Form::radio('subscribed', 1, true, array('class'=>'preferencesRadioBtn')) }}{{{" Subscribe"}}}
				      		</div>
				      		<div class="col-sm-3 col-md-3">
				      			{{ Form::radio('subscribed', 0, false,array('class'=>'preferencesRadioBtn')) }}{{{" Do not Subscribe"}}}
				      		</div>
				      	</div>
					</div>
				</div>
				<div class="form-group">
					{{Form::submit("Register >",array('class'=>'btn btn-info submitBtn', 'data-ng-disabled'=>'registerForm.$invalid'))}}
				</div>
				{{Form::close()}}
			</div>
		</section>
	</div>
@stop

@section('script')
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
{{HTML::script('packages/angularjs/js/app.js')}}
{{HTML::script('packages/angularjs/js/controllers.js')}}
{{HTML::script('packages/angularjs/js/directives.js')}}
@stop
