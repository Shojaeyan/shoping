<?php

class AdminController extends BaseController {
	
	public function showDashboard()
	{
		return View::make('admin.dashboard');

	}
}