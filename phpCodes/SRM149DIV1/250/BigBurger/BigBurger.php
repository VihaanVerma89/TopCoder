<?php
class BigBurger
{
	private $timeNow = 0;
	private $waitingTime = array();

	public function maxWait($arrivalTimes, $serviceTimes)
	{
		$i = 0 ;
		$timeNow = $arrivalTimes[0];
		while( $i != count($arrivalTimes) - 1)
		{
			$timeNow += $serviceTimes[$i];
			if($timeNow > $arrivalTimes[$i+1])
			{
				$waitingTime[$i+1] = $timeNow - $arrivalTimes[$i+1];
			}
			else
			{
				$timeNow = $arrivalTimes[i+1];
			}
			$i++;
		}
		return arsort($waitingTime)?array_shift($waitingTime):0;
	}
}