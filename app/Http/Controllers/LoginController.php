<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
	public function create()
	{
		return view('login.create');
	}

	public function store(LoginRequest $request)
	{
		// dd($request->email);
		$admin = [
			'email'    => $request->email,
			'password' => $request->password,
		];
		if (!auth()->attempt($admin))
		{
			throw ValidationException::withMessages([
				'email' => 'Your provided credentials could not be verified',
			]);
		}
		session()->regenerate();
		return redirect('/')->with('success', 'Log In!');
	}

	public function destroy()
	{
		auth()->logout();
		return redirect('/');
	}
}
