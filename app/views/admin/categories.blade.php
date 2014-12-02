	
	@extends("layouts.admin-master")
	@section('title')
		@parent
		:: {{ Lang::get('general.update') }}
	@stop
	@section("content")
		<div class="page-header" style="border-color:#555">
				<h1><span aria-hidden="true" class="glyphicon glyphicon-record"></span> {{Lang::get('general.users')}} </h1>
			</div>		

	{{ Form::open(array('url' => 'admin/categories/create')) }}				
		{{ Form::label('name') }}
		{{ Form::text('name') }}
		{{ Form::submit('save',array('name' => 'save')) }}
	{{ Form::close() }}
	<table  class="table table-hover" >
		<thead>
			<tr>	
				<th>#</th>	 
				<td>{{ Lang::get('general.name') }}</td>
				<td>{{ Lang::get('general.dateRegister') }}</td>
				<td> # </td>
			</tr>
		</thead>					
    @foreach($categories as $user)
    <tr id="d-{{ $user->id }}" style="postion">
      <td> {{ $user->id }} </td>
      <td> {{ $user->name }} </td>
      <td> {{ Jdf::jdate('y/m/d l',$user->created_at)  }} </td>
      <td>
        {{ Helper::deleteBtn($user->id,'admin.user.delete')}}
      </td>
    </tr>
    @endforeach

  </table>


	@stop