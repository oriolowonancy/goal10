<?php

class ProductTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		$faker = $this->getFaker();

		$categories = Category::all();

		foreach ($categories as $category)
		{
			for ($i = 0; $i < rand(-1, 10); $i++)
			{
				$title = ucwords($faker->word);
				$price = $faker->randomNumber(1000, 3000);
				$weight = $faker->randomNumber(0, 100);
				$size = $faker->randomNumber(6, 8, 12);
				$colour = ["lime","red","yellow","orchid","brown","purple","green","chocolate","fuchsia","coral","green"];
				$image = $faker->imageUrl($width = 640, $height = 480);
				$description = $faker->text;

				Product::create([
					"title" => $title,
					"price" => $price,
					"weight" => $weight,
					"size" => $size,
					"colour" => $faker->randomElement($colour),
					"image" => $image,
					"description" => $description,
					"category_id" => $category->id

					]);
			}
		}
	}
}