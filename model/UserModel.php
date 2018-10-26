<?php

class UserModel{
	public $login;
	public $password;
	public $name;
	public $surname;
	public $email;
	public $role;

	public function __construct($data){
		foreach($data as $key => $value){
			$this->$key = $value;
		}
	}
}