<div class="page-header" style="border-color:#555">
				<h1><span aria-hidden="true" class="glyphicon glyphicon-record"></span> {{Lang::get('general.update')}} {{Lang::get('general.password')}}</h1>
			</div>
			<ol class="breadcrumb">
			<li><a href="#" data-toggle="tooltip" title=" {{ Lang::get('messages.dateUpdate') }} / {{ Lang::get('messages.dateFa') }}">
				<span aria-hidden="true" class="glyphicon glyphicon-time"></span> {{ Jdf::jdate("Y/m/d l h:i:s",Auth::user()->updated_at); }}</a></li>
			<li><a href="#" data-toggle="tooltip" title="{{ Lang::get('messages.dateUpdate') }} / {{ Lang::get('messages.dateEn') }}">{{ Auth::user()->updated_at; }}</a></li>
			</ol>

		{{ Form::open(array('url'=>$action.'/changepassword', 'class'=>'form-signin')) }}
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
				{{ Form::label('oldpassword',Lang::get('general.oldpassword')) }}
				{{ Form::text('oldpassword','', array('placeholder' => Lang::get('messages.enteroldpassword'),'class' => 'form-control')) }}
			</div>
			<div class="form-group">
				{{ Form::label('password',Lang::get('general.password')) }}
				{{ Form::password('password', array('placeholder' => Lang::get('general.password'),'class' => 'form-control')) }}
			</div>
			<div class="form-group">
				{{ Form::label('repassword',Lang::get('general.repassword')) }}
				{{ Form::password('repassword', array('placeholder' =>  Lang::get('general.repassword') ,'class' => 'form-control')) }}
			</div>					

			<div class="form-group">
				{{ Form::submit(Lang::get('general.edit'), array('class' => 'btn btn-success btn-lg')) }}
			</div>

		{{ Form::close() }}