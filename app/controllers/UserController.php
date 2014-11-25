<?php

class UserController extends BaseController {

	public function showUpdate()
	{
		if(Auth::check())
		{
			return View::make('user.edit');
		}else{
			return Redirect::to("user/login")->with("flash_error",Lang::get('messages.loginText'));
		}
	}
	
	public function doUpdate()
	{
		if(Auth::check())
		{
			$inputs = Input::all();
			$rules = array(
				'name' => 'required|min:2|max:50',
				'family' => 'required|min:2|max:50',
				);
			$validator = Validator::make($inputs,$rules);
			if($validator->passes())
				{
					$name = Input::get('name');
					$family = Input::get('family');

					$user =  User::find(Auth::id());
					$user->name = $name;
					$user->family = $family;
					if($user->save()) 
					return Redirect::to("user/update")->with("flash_success",Lang::get('messages.success'));
				}else return Redirect::to("user/update")->withErrors($validator)->withInput();

		}else
			return Redirect::to("user/login")->with("flash_error",Lang::get('messages.loginTime'));
	}

	public function showPassword($value='')
	{
		return View::make('user.changepassword')->with('flash_success',Jdf::jdate('Y-m-d'));
	}
	public function doPassword()
	{
		if(Auth::check())
		{
			$inputs = Input::all();
			$rules = array(
				'oldpassword' => 'required|min:2|max:50',
				'password' => 'required|min:2|max:50',
				'repassword' => 'required|min:2|max:50',
				);
			$validator = Validator::make($inputs,$rules);
			if($validator->passes())
				{
					$password = Input::get('password');
					$repassword = Input::get('repassword');
				if($password!=$repassword)
				return Redirect::to('user/changepassword')->with('flash_error','Password')->withInput();
				else
					{					
						$user =  User::find(Auth::id());
						if(Hash::make($password)==$user->password)
						{
							$کuser->password = Hash::make($password);
							if($user->save()) 
							return Redirect::to("user/changepassword")->with("flash_success",Lang::get('messages.success'));	
						}else return Redirect::to("user/changepassword")->with("flash_error",Lang::get('messages.oldpasswordfailed'));
						
						
					}
				}else return Redirect::to("user/changepassword")->withErrors($validator)->withInput();	

		}else
			return Redirect::to("user/login")->with("flash_error",Lang::get('messages.loginTime'));
	}

	public function showLogin()
	{
 	    //return View::make('user.login');
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
					$user->password= $password;

					if($user->save())
						{
							$userlogin = array(
							    'email' => $user->email,
							    'password' => $repassword
							);
							if (Auth::attempt($userlogin)) {
							    return Redirect::to('/');
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
			return Redirect::to('/');
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
