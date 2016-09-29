<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->engine = "InnoDB";
			$table->increments('id');
			$table->string('title');
			$table->integer('price');
			$table->integer('weight');
			$table->integer('size');
			$table->string('colour');
			$table->string('image');
			$table->text('description');
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories');




			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product');
	}

}
