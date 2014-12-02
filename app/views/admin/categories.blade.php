	
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
		{{ Form::label(trans('general.name')) }}
		<div class="form-group">
		{{ Form::text('name', Input::old('name') ,array('class' => 'form-control')) }}
		</div>
		<div class="form-group"> 
			{{ Form::label(trans('general.categories')) }}
			<select name='parent' class='form-control'>
				<option></option>
			@foreach($categories as $cat)
				<option value="{{ $cat->id }}"> {{ $cat->name }} </option>
			@endforeach
			</select>
		</div>
		{{ Form::submit('save',array('name' => 'save' , 'class' => 'btn btn-success')) }}
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
    @foreach($categories as $cat)
    <tr id="d-{{ $cat->id }}" style="postion">
      <td> {{ $cat->id }} </td>
      <td> {{ $cat->name }} </td>
      <td> {{ Jdf::jdate('y/m/d l',$cat->created_at)  }} </td>
      <td>
        {{ Helper::deleteBtn($cat->id,'admin.user.delete')}}
      </td>
    </tr>
    @endforeach

  </table>
    <div class="pagination"> {{ $categories->links() }} </div>



	@stop