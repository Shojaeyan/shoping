@extends("layouts.master")
@section('title')
	@parent
	:: {{ Lang::get('general.login') }}
@stop
@section("content")
	<div class="page-header" style="border-color:#555">
			<h1><span aria-hidden="true" class="glyphicon glyphicon-record"></span> {{Lang::get('general.login')}}</h1>
		</div>
	{{ Form::open(array('url'=>'user/login', 'class'=>'form-signin')) }}
		<div class="form-group">
			@if(count($errors)>0)
			<ul class="alert alert-danger" role="alert">
				<!-- SHow Error With Validation -->
			   @foreach($errors->all() as $error)
			   <li>{{ $error }}</li>
			   @endforeach
			  </ul>
			@endif  
			  <!-- Show Error with Session Error -->
			  @if (Session::has('flash_error'))
        		<div  class="alert alert-danger" role="alert" id="flash_error">{{ Session::get('flash_error') }}</div>
   			  @endif

			@if (Session::has('flash_success'))
        		<div  class="alert alert-success" role="alert"> {{ Session::get('flash_success') }}</div>
   			  @endif   			  
		</div>  

		<div class="form-group">
			{{ Form::label('email',Lang::get('general.email')) }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'youremial@sample.com','class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', Lang::get('general.password')) }}
			{{ Form::password('password', array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::checkbox('name', 'value') }}
			{{ Form::label('remember', Lang::get('general.remember')) }}
			<button type="button" class="btn btn-info" onclick="LoadAjax('{{ csrf_token() }}','{{ route('login.ajax')}}','post','p1','p2','p3','p4','#pp','#ll')" id="ll" > Click </button>
			<div id="pp">ddd</div>
			test

			?
			
		</div>		
{{ Config::get('app.sitename') }}
		<div class="form-group">{{ Form::submit(Lang::get('general.enter'), array('class' => 'btn btn-primary')) }}</div>
	{{ Form::close() }}
@stop

