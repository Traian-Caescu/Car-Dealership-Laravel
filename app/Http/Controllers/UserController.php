<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    //register form
    public function create(){
		return view('users.register');
	}
	
	//register the user
	public function store(Request $request){
		$formFields = $request -> validate([
			'name' => ['required', 'min:4'],
			'email' => ['required', 'email', Rule::unique('users', 'email')],
			'password' => 'required | confirmed | min:5'
			]);
			//BCRYPT the password, hash
			$formFields['password'] = bcrypt($formFields['password']);
		
		$user = User::create($formFields);
		//login
		auth()->login($user);
		return redirect('/')-> with('message', 'Account created, you are now logged in');
		
		}
		
		//user logout
		public function logout(Request $request) {
			auth() -> logout();
			$request ->session()->invalidate();
			$request -> session()->regenerateToken();
			return redirect('/')->with('message', 'Logged Out Successfully');
		}
		
		//user login
		public function login()
		{
			return view('users.login');
		}
		
		//verify
		public function authenticate(Request $request)
		{
			$formFields = $request -> validate([
			'email' => ['required', 'email',],
			'password' => 'required'
			]);
			
			//atempt to log the user in
			if(auth()->attempt($formFields)){
				$request -> session()->regenerate();
				return redirect('/');
			}
			//fails, invalid credentials
			return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
		}
		
}
