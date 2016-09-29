<?php
class CategoryTableSeeder extends Seeder
{
	public function run()
	{
		 Category::create(array(
            'name' => 'Shirts',
        ));

		 Category::create(array(
            'name' => 'Tank-tops',
        ));

		 Category::create(array(
            'name' => 'Caps',
        ));

		 Category::create(array(
            'name' => 'Jewelries',
        ));
	}
}