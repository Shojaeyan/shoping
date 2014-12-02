<?php

class AdminController extends BaseController {

	protected $layout = 'layouts.admin-master';
	
	public function showDashboard()
	{
// 		$user = User::find(18);
// if( Authority::can('update',$user) ) {
//     $user->username = 'someuser@test.com';
//     $user->save();
// } else {
//     // what happens if the user's trying to do something they're not
//     // allowed to do?
//     echo ("What do you think you're doing?!");
// }

 		if(Auth::user()->hasRole('admin')){
		$count = User::where('del','=','0')->count();
		return View::make('admin.dashboard')->with('usersCount',$count);
		}else return Redirect::to("/")->with('flash_info','Access');


	}

	public function showUpdate()
	{
		$this->layout->content = View::make('user.edit')->with('action','admin');
	}

	public function showPassword()
	{
		$this->layout->content = View::make('user.changepassword')->with('action','admin');
	}

	public function showUsers($value='')
	{
		$allUsers = User::where('del' ,'=','0')->paginate(1);
		return View::make('admin.users')->with('allUsers',$allUsers);
	}

	public function deleteUser($id)
	{
		
			$user = User::find($id);
			if (Request::ajax())
			{
				if(Authority::can('delete','user') ) 
				{
					 if($user){
					 	$user->del = 1;
					 	if($user->save()) return $id;	
						else return -1;
					 }else return 0;
				}else return -2;

			}else{
				if(Authority::can('delete','user') ) 
				{
					if($user){
					 	$user->del = 1;
					 	if($user->save()) return Redirect::to('admin/users')->with('flash_success',trans('messages.success'));	
						else return  Redirect::to('admin/users')->with('flash_error',trans('messages.dberror'));
					 }else return  Redirect::to('admin/users')->with('flash_info',trans('messages.usernotfound'));
				}else return  Redirect::to('admin/users')->with('flash_info',trans('messages.useraccess'));
			}		
	}


}