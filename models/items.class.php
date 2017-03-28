<?php

class Items{

	private $id;
	private $price;
	private $description;

	public function __construct($id)
	{
		$this->id = $id;
		$this->price=1;//go there and ask the database what is the price of this item
		$this->description=1;//go there and ask the database what is the description of this item
	}

	public function get_price()
	{
		return $this->price;
	}


	public function get_description()
	{
		return $this->description;
	}


}


