<?php

class Product extends Eloquent
{
	protected $table = "Product";

	protected $guarded = ["id"];

	public function orders()
	{
		return $this->belongsToMany("Order", "order_item");
	}

	public function orderItems()
	{
		return $this->hasMany("OrderItem");
	}

	public function category()
	{
		return $this->belongsTo("Categories");
	}
}