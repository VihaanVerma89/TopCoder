<?php

class MostProfitable
{
	public function bestItem($costs, $prices, $sales, $items)	
	{
		$profitMap = array();	
		
		for($i=0; $i < count($costs) ; $i++)
		{
			$profit	= $prices[$i] - $costs[$i];
			if($profit > 0)
			{
				$profitMap[$i] = $profit * $sales[$i];	
			}
		}
		
		if(!empty($profitMap))
		{
			//find the max element.
			$max = max($profitMap);
			$maxKeyArray = array_keys($profitMap, $max);
			return $items[array_shift($maxKeyArray)];
		}
	}
}