	@extends("layouts.master")
	@section('title')
		@parent
		:: {{ Lang::get('general.update') }}
	@stop
	@section("content")
		<div class="page-header" style="border-color:#555">
				<h1><span aria-hidden="true" class="glyphicon glyphicon-record"></span> {{Lang::get('general.update')}}</h1>
			</div>
			<ol class="breadcrumb">
			<li><a href="#" data-toggle="tooltip" title=" {{ Lang::get('messages.dateUpdate') }} / {{ Lang::get('messages.dateFa') }}">
				<span aria-hidden="true" class="glyphicon glyphicon-time"></span> {{ Jdf::jdate("Y/m/d l",'2014-11-21 17:10:22'); }}</a></li>
			<li><a href="#" data-toggle="tooltip" title="{{ Lang::get('messages.dateUpdate') }} / {{ Lang::get('messages.dateEn') }}">{{ Auth::user()->updated_at; }}</a></li>
			</ol>			
		{{ Form::open(array('url'=>'user/update', 'class'=>'form-signin')) }}
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
	        		<div id="flash_error" class="alert alert-danger" role="alert">{{ Session::get('flash_error') }}</div>
	   			  @endif
				  @if (Session::has('flash_success'))
	        		<div id="flash_success" class="alert alert-success" role="alert">{{ Session::get('flash_success') }}</div>
	   			  @endif	   			  
			</div>  
			<div class="form-group">
				{{ Form::label('name',Lang::get('general.name')) }}
				{{ Form::text('name',Auth::user()->name,array('placeholder' => Lang::get('general.entername'),'class' => 'form-control')) }}
			</div>
			<div class="form-group">
				{{ Form::label('family',Lang::get('general.family')) }}
				{{ Form::text('family',Auth::user()->family, array('placeholder' => Lang::get('general.enterfamily'),'class' => 'form-control')) }}
			</div>
			<div class="form-group">
				{{ Form::label('email',Lang::get('general.email')) }}
				{{ Form::text('email',Auth::user()->email, array('readonly' =>'readonly','placeholder' => 'youremial@sample.com','class' => 'form-control')) }}
				<p class="help-block">{{ Lang::get('messages.readonly')}}</p>
			</div>					

			<div class="form-group">
				{{ Form::submit(Lang::get('general.edit'), array('class' => 'btn btn-success btn-lg')) }}
				{{ Form::submit(Lang::get('general.view').' '.Lang::get('general.profile'), array('class' => 'btn btn-defualt btn-lg')) }}
			</div>

		{{ Form::close() }}
	@stop