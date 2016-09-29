<?php

class UserController extends BaseController
{
	public function register()
	{
		return View::make('pages.register');
	}

	public function store()
	{
		$validator = Input::all();
		$data = Validator::make($validator, [
			'firstname' => 'required|min:3', 
			'lastname' => 'required|min:3', 
			'password' => 'required|min:6', 
			'password_confirmation' => 'required|same:password', 
			'email' => 'required|unique:users|min:10', 
			'phone_number1' => 'required|min:8',
			]);

		if ($data->fails()) 
		{
			return Redirect::route('register')->withErrors($data)->withInput();
		}

		else
		{
			$user = new User;
			$validator['password'] = Hash::make($validator['password']);
			$user->fill($validator);
			$user->save();

			if ($user->save())
			{
				return Redirect::route('register')->with('success', 'you registered successfully');
			}

			else 
			{
				return Redirect::route('register', 'an error occured during signUp');
			}

		}
		/*$data=Input::all();
        $data['password']=Hash::make( $data['password']);
        $user =new User;
        $user->fill($data);
        $user->save();
        
		return View::make('pages.register');*/
	}


	public function authenticateAction()
	{
		$credentials = [
			"email" => Input::get("email"),
			"password" => Input::get("password")
		];

		if (Auth::attempt($credentials))
		{
			return Response::json([
				"status" => "ok",
				"user" => Auth::user()->toArray()
				]);
		}

		return Response::json([
			"status" => "error"
			]);
	}
}