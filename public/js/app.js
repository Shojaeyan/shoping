
function LoadAjax(token,url_,type,p1,p2,p3,p4,p,lock)
	{
        if(token=='') {
            $(p).html('صفحه را بروز رسانی کنید ');
            return false;
        }
        var $btn = $(lock).button('loading');
        $(p).html('<div class="progress progress-striped active"><div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">100% Complete</span></div></div>');
        var myData = "_token="+token+"&p1="+p1+"&p2="+p2+"&p3="+p3+"&p4="+p4; //post variables
        jQuery.ajax({
            type: type, // HTTP method POST or GET
            url: url_, //Where to make Ajax calls
            dataType:"text", // Data type, HTML, json etc.
            data:myData, //post variables
            success:function(response){
			$(p).html(response);
            $btn.button('reset');
            },
            error:function (xhr, ajaxOptions, thrownError){
                alert(thrownError); //throw any errors
            }
        });		
	}

$(function () {  /// Toltip
$('[data-toggle="tooltip"]').tooltip()
})

