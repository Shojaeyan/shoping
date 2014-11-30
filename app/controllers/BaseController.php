<?php

class BaseController extends Controller {


	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

public function doUpdate($action)
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
					return Redirect::to($action."/update")->with("flash_success",Lang::get('messages.success'));
				}else return Redirect::to($action."/update")->withErrors($validator)->withInput();

		}else
			return Redirect::to("user/login")->with("flash_error",Lang::get('messages.loginTime'));
	}

	public function doPassword($action)
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
				return Redirect::to($action.'/changepassword')->with('flash_error','Password')->withInput();
				else
					{					
						$user =  User::find(Auth::id());
						if(Hash::make($password)==$user->password)
						{
							$کuser->password = Hash::make($password);
							if($user->save()) 
							return Redirect::to($action."/changepassword")->with("flash_success",Lang::get('messages.success'));	
						}else return Redirect::to($action."/changepassword")->with("flash_error",Lang::get('messages.oldpasswordfailed'));
						
						
					}
				}else return Redirect::to($action."/changepassword")->withErrors($validator)->withInput();	

		}else
			return Redirect::to("user/login")->with("flash_error",Lang::get('messages.loginTime'));
	}	

}
