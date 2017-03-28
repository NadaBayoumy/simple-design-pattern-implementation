<?php

class Order
{
	private $saleLines; //in order there are array of sale lines
	private $tax;
	private $total_price;
	private $amount_due;

	//here i need in constructor know the sale lines i need sale line array
	public function __construct($arr)
	{
		 $this->tax = _tax;
		 if(gettype($arr[0]) === "saleLine")
		 {
		 	$this->saleLines =$arr;	
		 } 

		 // if($arr instanceof "SaleLine")
		 // {
		 // 	$this->saleLines =$arr;	
		 // } 

	}

	public function calculate_total()
	{
		foreach ($this->saleLines as $saleLine) {
			$this->total_price+= $saleLine->subtotal;
		}
	}

}

