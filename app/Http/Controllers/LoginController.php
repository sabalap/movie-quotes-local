<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
	public function store(LoginRequest $request)
	{
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
		return redirect()->route('home');
	}

	public function destroy()
	{
		auth()->logout();
		return redirect()->route('home');
	}
}
