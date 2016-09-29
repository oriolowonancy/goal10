<?php

class OrderItem extends Eloquent
{
	protected $table = "order_item";

	protected $guarded = ["id"];

	public function product()
	{
		return $this->belongsTo("Product");
	}

	public function order()
	{
		return $this->belongsTo("Order");
	}
}