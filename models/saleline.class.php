<?php

class SaleLine{

	private $item;
	private $qty;
	private $subtotal;

	// //here item is object 
	// public function __construct($item,$qty)
	// {
	// 	$this->id = $id;
	// 	$this->qty=$qty;
	// }


	//here item is object 
	public function __construct($item_id,$qty)
	{
		$this->item = new item($item_id);
		$this->qty=$qty;
	}

	public function calculate_subtotal()
	{
		return $this->item->get_price() * $this->qty;
	}

}

