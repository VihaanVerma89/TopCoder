<?php
class FormatAmt
{
	public function amount($dollars, $cents)
	{
		$dollarNotation = $this->addComma($dollars);
		$dollarNotation = $this->addCents($dollars , $cents);
		return "$". $dollarNotation;
	}
	
	private function addComma($dollars)
	{
		$dollars = strrev($dollars);
		$dollarParts = str_split($dollars, 3);
		$dollarNotation = join(',', $dollarParts);
		return strrev($dollarNotation);
	}
	
	private function addCents($dollars, $cents)
	{
		if(strlen($cents)==2)		
		{
			return $dollars . '.' . $cents;
		}
		else if(strlen($cents)==1)
		{
			return $dollars . '.0' . $cents;
		}
	}
}