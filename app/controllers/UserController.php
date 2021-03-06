<?php

class UserController extends BaseController {

	public function showUpdate()
	{
		return Redirect::to("user/login")->with("flash_error",Lang::get('messages.loginText'));
	}
	

	public function showPassword($value='')
	{
		//if (Authority::cannot('create', 'album')) {
		      // App::abort('403', 'Sorry! Not authorized');
		return View::make('user.changepassword')->with('action','user');
	}

	public function showLogin()
	{
 	    //return View::make('user.login');
 	   if (Request::ajax()) 
 	   {
 	   	return 'ss';
 	   } 
 	   return View::make("user.login");
	}

	public function showRegister(){

		return View::make("user.register");
	}
	public function doAjax(){

		return "salam";
	}	
	public function doRegister()
	{

		$inputs = Input::all();
		$rules = array(			
			'name' => 'required|min:2|max:50',
			'family' => 'required|min:2|max:50',
			'email' => 'required|email',
			'password'=>'required|min:4|max:20',
			'repassword' => 'required|min:4|max:20'
			);

		$name = Input::get('name');
		$family = Input::get('family');
		$email = Input::get('email');
		$password = Input::get('password');
		$repassword = Input::get('repassword');
		$validator = Validator::make($inputs,$rules);

		if($validator->passes()){
			if($password!=$repassword){
				return Redirect::to('user/register')->with('flash_error','Password')->withInput();
				}else{

					$password=Hash::make($password);
					$remember="";
					$user = new User;
					$user->name = $name;
					$user->family = $family;
					$user->email = $email;
					$user->password = $password;
					$user->role = 2 ;	
					if($user->save())
						{
							$role_pending = Role::where('name', '=', 'admin')->first();
        					$user->roles()->attach($role_pending);
							$userlogin = array(
							    'email' => $user->email,
							    'password' => $repassword
							);
							if (Auth::attempt($userlogin)) {
							    return Redirect::to('/')->with('flash_success',trans('messages.regsuccess'));
							}
							else
							return Redirect::to('user/login')->with('flash_success',' Yeh !! Succes ... ');
						}

					}
		}else return Redirect::to('user/register')->withErrors($validator)->withInput();			

	}	
	public function doLogin()
	{

	$inputs = Input::all();
	$rules = array('password'=>'required|min:4|max:50','email'=>'required|email');
	// $messages = array(
 //    'email.required' => 'We need to know your e-mail address!',
 //    );
	$email = Input::get('email');
    $pass = Input::get('password');
    //$password = Hash::make($pass);
    $remember = Input::get('remember');
    $remember = !empty($remember) ? true : false;
    $values = array(
   		'email' => $email,
    	'password' => $pass,
    	
    );	
	$validator = Validator::make($inputs,$rules);
	if($validator->passes())
		{
		if(Auth::attempt($values))
			{
				if(Auth::user()->hasRole('admin'))
				return Redirect::to('/admin/dashboard')->with('flash_success',trans('messages.loginsuccess'));
				else
				return Redirect::to('/')->with('flash_success',trans('messages.loginsuccess'));
			
			}else return Redirect::to('user/login')->with('flash_error', 'LoginFailed...');

		}else{
			return Redirect::to('user/login')->withErrors($validator)->withInput();
			//return Redirect::to('login')->with('flash_error', 'Login Failed');
			}
	}
	public function doLogout()
	{
		Auth::logout();
		return Redirect::to("user/login")->with('flash_success',Lang::get('messages.LogoutText'));
	}

	public function showUser($id){

		return $id;
	}

}
