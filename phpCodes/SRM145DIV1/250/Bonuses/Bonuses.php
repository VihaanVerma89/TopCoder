<?php

class Bonuses
{
	public function getDivision($points)	
	{
		$points = $this->getPercentages($points);
		$partialTotal = $this->getPartialTotal($points);
		$points = $this->makeWholeNumber($points);
		
		$points = $this->addPartial($points, $partialTotal);
		
		return $points;
	}
	
	private function addPartial($points, $partialTotal)
	{
		$arrayCopy = $points;
		
		while($partialTotal >= 0)
		{
			$max = max($arrayCopy);
			$points[array_search($max, $points)]++;
			$arrayCopy[array_search($max, $arrayCopy)] = -1;
			$partialTotal--;
		}
		
		return $points;
	}
	
	private function getSum($array)
	{
		return array_sum($array);	
	}
	
	private function getPercentages($array)
	{
		$total = $this->getSum($array);
		foreach($array as $key => $element)
		{
			$array[$key] = ($element / $total) * 100;
		}
		
		return $array;
	}
	
	private function getPartialTotal($points)
	{
		$fractionTotal = 0;
		
		foreach($points as $element)
		{
			$whole = floor($element);
			$fraction = $element - $whole;
			$fractionTotal += $fraction;
		}
		
		return $fractionTotal;
	}
	
	private function makeWholeNumber($array)
	{
		foreach ($array as $key => $element)	
		{
			$array[$key] = floor($element);	
		}
		return $array;
	}
}