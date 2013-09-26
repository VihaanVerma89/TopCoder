<?php
class DivisorDigits
{
	public function howMany($number)
	{
		$arr = str_split($number);
		$digits = array_values($arr);
		$count = 0;
		$number = intval($number);
		foreach($digits as $digit)
		{
			if($digit != 0)
			{
				if( ($number % $digit) == 0 )
				{
					$count++;	
				}
			}
		}
		
		return $count;
	}
}