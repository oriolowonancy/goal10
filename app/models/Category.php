<?php

class Category extends Eloquent
{
	protected $table = "categories";

	protected $guarded = ["id"];

	public function products()
	{
		return $this->hasMany("Product");
	}
}