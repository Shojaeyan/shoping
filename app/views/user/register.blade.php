@extends("layouts.master")
@section('title')
	@parent
	:: {{ Lang::get('general.register') }}
@stop
@section("content")
	<div class="page-header" style="border-color:#555">
			<h1><span aria-hidden="true" class="glyphicon glyphicon-record"></span> {{Lang::get('general.register')}}</h1>
		</div>
		{{ Form::open(array('url'=>'user/register', 'class'=>'form-signin')) }} 
		<div class="form-group">
			{{ Form::label('name',Lang::get('general.name')) }}
			{{ Form::text('name', Input::old('name'), array('placeholder' => Lang::get('general.entername'),'class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('family',Lang::get('general.family')) }}
			{{ Form::text('family', Input::old('family'), array('placeholder' => Lang::get('general.enterfamily'),'class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('email',Lang::get('general.email')) }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'youremial@sample.com','class' => 'form-control')) }}
			<p class="help-block">{{ Lang::get('messages.emailhint')}}</p>
		</div>				
		<div class="form-group">
			{{ Form::label('password', Lang::get('general.password')) }}
			{{ Form::password('password', array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('repassword', Lang::get('general.repassword')) }}
			{{ Form::password('repassword', array('class' => 'form-control')) }}
		</div>		

		<div class="form-group">
			{{ Form::reset(Lang::get('general.reset'), array('class' => 'btn btn-defualt')) }}
			{{ Form::submit(Lang::get('general.register'), array('class' => 'btn btn-primary')) }}
		</div>
	{{ Form::close() }}
@stop