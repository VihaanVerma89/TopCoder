<?php
class Invetory
{
	public function monthlyOrder($sales, $daysAvailable)
	{
		$expectedOrders = array();
		
		for($i=0; $i < count($sales) ; $i++)
		{
			if($sales[$i]!= 0)	
			{
				$expectedOrders[] = ($sales[$i]/$daysAvailable[$i])	 * 30;
			}
		}
		
		if(!empty($expectedOrders))
		{
			$result =  ceil($this->average($expectedOrders));
			return $result;
		}
	}
	
	private function average($array)
	{
		if(!empty($array))
		{
			$avg  = array_sum($array)/count($array);
			return $avg;
		}
	}
}