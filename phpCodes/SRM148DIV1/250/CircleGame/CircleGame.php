<?php

class CircleGame
{
	private $cards = array("A" => 1,
						   "2" => 2,
						   "3" => 3,
						   "4" => 4,
						   "5" => 5,
						   "6" => 6,
						   "7" => 7,
						   "8" => 8,
						   "9" => 9,
						   "T" => 10,
						   "J" => 11,
						   "Q" => 12,
						   "K" => 13); 

	public function cardsLeft($deck)
	{
		$deck = str_split($deck);
		$deck = $this->removeK($deck);
		$deck = $this->removeSumK($deck);
		$deck = $this->removeCircularSumK($deck);
		return isset($deck)?implode("", $deck): "";
	}	
	
	private function removeCircularSumK($deck)
	{
		if(!empty($deck))
		{
			$sum13 = true;
			while($sum13)
			{
				$first = array_shift(array_values($deck));
				$last = end(array_values($deck));
				
				if(empty($first) || empty($last))
				{
					break;
				}

				if($this->cardsSum($first, $last) == 13)
				{
					array_shift($deck);
					array_pop($deck); 
				}
				else 
				{
					$sum13 = false;
				}
			}
			return $deck;
		}
	}
	
	private function removeSumK($deck)
	{
		foreach($deck as $key => $value)
		{
			if(isset($deck[$key]) && isset($deck[$key+1]))
			{
				if($this->cardsSum($deck[$key], $deck[$key+1]) == 13)	
				{
					unset($deck[$key]);	
					unset($deck[$key+1]);	
				}
			}
		}
		reset($deck);
		return $deck;
	}
	
	private function cardsSum($i , $j)
	{
		return $this->cards[$i] + $this->cards[$j];			
	}
	
	private function removeK($deck)
	{
		while(array_search("K", $deck) !== false)
		{
			unset($deck[array_search("K", $deck)]);
		}
		reset($deck);
		return $deck;
	}
}