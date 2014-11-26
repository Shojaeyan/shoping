<?php

class AdminController extends BaseController {

	protected $layout = 'layouts.admin-master';
	
	public function showDashboard()
	{
		$count = User::count();
		return View::make('admin.dashboard')->with('usersCount',$count);

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
		$allUsers = User::paginate(5);
		return View::make('admin.users')->with('allUsers',$allUsers);
	}

	public function deleteUser($id)
	{
		# code...
		return $id;
	}


}