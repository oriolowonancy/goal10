<?php

class DatabaseSeeder extends Seeder {

	protected $faker;

	public function getFaker()
	{
		if (empty($this->faker))
		{
			$faker = Faker\Factory::create();
			$faker->addProvider(new Faker\Provider\Base($faker));
			$faker->addProvider(new Faker\Provider\Lorem($faker));
			//$this->faker = Faker\Factory::create();
		}

		return $this->faker = $faker;
		//return $this->faker;
	}

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	
        Eloquent::unguard();
       
       //$this->call('UserTableSeeder');
       //$this->call('CategoryTableSeeder');
        // $this->call("ProductTableSeeder");
 		// $this->call("OrderTableSeeder");
  		//$this->call("OrderItemTableSeeder");
	}

}
