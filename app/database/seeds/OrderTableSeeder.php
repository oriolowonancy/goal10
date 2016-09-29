<?php

class OrderTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		$faker = $this->getFaker();

		$users = User::all();

		foreach ($users as $user)
		{
			for ($i = 0; $i < rand(-1, 5); $i++)
			{
				Order::create([
					"user_id" => $user->id
					
					]);
			}
		}
	}
}