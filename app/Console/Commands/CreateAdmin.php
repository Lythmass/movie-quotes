<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class CreateAdmin extends Command
{
	protected $signature = 'create:admin';

	protected $description = 'Create the admin using username, email and password';

	public function handle()
	{
		$username = $this->ask('Username?');
		$email = $this->ask('Email?');
		$password = $this->secret('Password?');

		$validator = Validator::make([
			'username' => $username,
			'email'    => $email,
			'password' => $password,
		], [
			'username' => ['required', 'min:2'],
			'email'    => ['required', 'email'],
			'password' => ['required', 'min:8'],
		]);

		if ($validator->fails())
		{
			$this->info('Staff User not created.');
			return 1;
		}

		$user = User::create([
			'username' => $username,
			'email'    => $email,
			'password' => bcrypt($password),
		]);

		auth()->login($user);
	}
}
