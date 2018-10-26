<?php

class ProductModel{
	private $ref;
	private $name;
	private $price;

	public function __construct($data){
		foreach($data as $key => $value){
			$this->$key = $value;
		}
	}
}