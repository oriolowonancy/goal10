<?php

class OrderController extends BaseController 
{
	public function indexAction()
	{
		$query = Order::with([
			"user", "orderItem", "orderItems.product", "orderItems.product.category"
			]);

		$user = Input::get("user");

		if ($user)
		{
			$query->where("user_id", $user);
		}

		return $query->get();
	}

}


