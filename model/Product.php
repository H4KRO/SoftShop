<?php

class Product{
	public $ref;
	public $name;
	public $price;

	public function __construct($data){
		foreach($data as $key => $value){
			$this->$key = $value;
		}
	}
}