<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'create:admin';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create admin';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle()
	{
		$admin = [
			'email'    => $this->ask('What is you email?'),
			'password' => bcrypt($this->secret('What is your password?')),
		];
		User::create($admin);
	}
}
