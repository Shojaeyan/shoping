	
	@extends("layouts.admin-master")
	@section('title')
		@parent
		:: {{ Lang::get('general.update') }}
	@stop
	@section("content")
		<div class="page-header" style="border-color:#555">
				<h1><span aria-hidden="true" class="glyphicon glyphicon-record"></span> {{Lang::get('general.users')}} </h1>
			</div>			
	<table  class="table table-hover" >
		<thead>
			<tr>	
				<th>#</th>	
				<td>{{ Lang::get('general.name') }}</td>
				<td>{{ Lang::get('general.family') }}</td>
				<td>{{ Lang::get('general.email') }}</td>
				<td>{{ Lang::get('general.dateRegister') }}</td>
				<td> # </td>
			</tr>
		</thead>					
    @foreach($allUsers as $user)
    <tr id="d-{{ $user->id }}" style="postion">
      <td> {{ $user->id }} </td>
      <td> {{ $user->name }} </td>
      <td> {{ $user->family }} </td>
      <td> {{ $user->email }} </td>
      <td> {{ Jdf::jdate('y/m/d l',$user->created_at)  }} </td>
      <td>
        {{ Helper::deleteBtn($user->id,'admin.user.delete')}}
      </td>
    </tr>
    @endforeach

  </table>
  <div class="pagination"> {{ $allUsers->links() }} </div>

  @include("global.delete-footer")

	@stop