<?php
class Helper {
    public static function doMessage() {
        $message = '';
        if (Session::has('flash_error'))
						$message= "
			<div role='alert' class='alert alert-danger alert-dismissible fade in'>
      		<button data-dismiss='alert' class='close' type='button'><span aria-hidden='true'>×</span><span class='sr-only'>Close</span></button>
      		<strong>".Session::get('flash_error')."</div>";
		elseif (Session::has('flash_success')) {
						$message= "
			<div role='alert' class='alert alert-success alert-dismissible fade in'>
      		<button data-dismiss='alert' class='close' type='button'><span aria-hidden='true'>×</span><span class='sr-only'>Close</span></button>
      		<strong>".Session::get('flash_success')."</div>";
		}
		elseif (Session::has('flash_info')) {
			$message= "
			<div role='alert' class='alert alert-info alert-dismissible fade in'>
      		<button data-dismiss='alert' class='close' type='button'><span aria-hidden='true'>×</span><span class='sr-only'>Close</span></button>
      		<strong>".Session::get('flash_info')."</div>";
		}
		elseif (Session::has('flash_warning')) {
			$message= "
			<div role='alert' class='alert alert-warning alert-dismissible fade in'>
      		<button data-dismiss='alert' class='close' type='button'><span aria-hidden='true'>×</span><span class='sr-only'>Close</span></button>
      		<strong>".Session::get('flash_warning')."</div>";
		}		
		return $message;

    }

    public static function deleteBtn($id,$route,$val="")
    {
    	# code...
    	if($val=='') $val=Lang::get('general.delete'); else $val=$val;
    	$del = Form::open(array('method'=>'DELETE', 'route' => array($route, $id)));
        $del .= Form::submit($val, array('class'=>'btn btn-danger'));
        $del .= Form::close();
        return $del;
    }
}