	
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
      	{{Form::open(array('method'=>'DELETE', 'route' => array('admin.user.delete', $user->id)))}}
{{Form::submit(Lang::get('general.delete') , array('class'=>'btn btn-danger'))}}
{{Form::close()}}


       </td>
    </tr>
    @endforeach

  </table>
  <div class="pagination"> {{ $allUsers->links() }} </div>


<!-- Modal -->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                {{ Auth::user()->name.' '.Auth::user()->family }} ! 
            </div>
            <div class="modal-body">
                تمایل به حذف دارید ؟
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ Lang::get('general.cancel') }}</button>
                <a href="#" id="" onclick="LoadAjax('{{ csrf_token() }}','{{ route('admin.user.delete')}}','post',this.id,'p2','p3','p4','#pp','#ll')"  class="btn btn-danger danger">{{ Lang::get('general.delete') }}</a>
            </div>
        </div>
    </div>
</div>

	 <script>
$('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.danger').attr('id', $(e.relatedTarget).data('href'));
});
	 </script>
<script>
$(document).ready(function(){
    $('form').submit(function(e){
      e.preventDefault();
       url = $(this).attr('action');
        BootstrapDialog.confirm("{{ Lang::get('messages.deleteQuestion') }}", function(result){
            if(result) {
           $.ajax({url:url, 
           type:"POST",
           success: function(data, textStatus, jqXHR) {
           	$('#d-'+ jqXHR.responseText).addClass('danger');;
           	$('#d-'+ jqXHR.responseText).fadeOut("slow");
                },
           error: function(jqXHR, textStatus, errorThrown) {
                    alert('Failure: ' + textStatus + ". Error: " + errorThrown);}
           });
            }
        });
    });

});
</script>
	@stop