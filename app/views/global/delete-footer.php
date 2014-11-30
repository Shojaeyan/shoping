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
$(document).ready(function(){
    $('form').submit(function(e){
      e.preventDefault();
       url = $(this).attr('action');
        BootstrapDialog.confirm("آیا تمایل به حذف دارید ؟", function(result){
            if(result) {
           $.ajax({url:url, 
           type:"GET",
           success: function(data, textStatus, jqXHR) {
            if(jqXHR.responseText>0)
              {
                var dd = '#d-'+String(jqXHR.responseText).trim();
           	    $(dd).addClass('danger');
           	    $(dd).fadeOut("slow");
              } 
              else if(jqXHR.responseText==0) BootstrapDialog.show({message: 'User not found !!!'});
              else if(jqXHR.responseText==-1) BootstrapDialog.show({message: 'Error Change'});
              else if(jqXHR.responseText==-2) BootstrapDialog.show({message: 'User Access'});
                },
           error: function(jqXHR, textStatus, errorThrown) {
                    alert('Failure: ' + textStatus + ". Error: " + errorThrown);}
           });
            }
        });
    });

});
</script>