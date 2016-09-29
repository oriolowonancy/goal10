<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $fillable = ['firstname', 'lastname', 'phone_number1', 'phone_number2', 'address', 'email', 'password', 'password_confirmation', 'remember_token'];

	protected $guarded = ["id"];

/*
	public function getAuthIdentifier()
	{
		return $this->password;
	}*/

	public function getReminderEmail()
	{
		return $this->email;
	}

	public function orders()
	{
		return $this->hasMany("Order");
	}

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}
