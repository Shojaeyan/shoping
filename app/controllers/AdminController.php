<?php

class AdminController extends BaseController {

	protected $layout = 'layouts.admin-master';
	
	public function showDashboard()
	{
		return View::make('admin.dashboard');

	}

	public function showUpdate()
	{
		$this->layout->content = View::make('user.edit')->with('action','admin');
	}

	public function showPassword()
	{
		$this->layout->content = View::make('user.changepassword')->with('action','admin');
	}

}