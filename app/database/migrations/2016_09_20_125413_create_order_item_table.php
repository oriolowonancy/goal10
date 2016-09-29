<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_item', function(Blueprint $table)
		{
			$table->engine = "InnoDB";
			$table->increments('id');
			$table->integer('quantity');
			$table->integer('price');
			$table->timestamp('order_date');
			$table->integer('product_id')->unsigned();
			$table->foreign('product_id')->references('id')->on('product');
			$table->integer('order_id')->unsigned();
			$table->foreign('order_id')->references('id')->on('order');

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
		Schema::drop('order_item');
	}

}
