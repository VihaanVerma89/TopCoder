<?php

require_once 'Combinatorics.php';
class PickTeam
{
	private $_peopleMap;
	public function pickPeople($teamSize, $peoplesInfo)
	{
		$nameMap = array();
		if(!empty($peoplesInfo))
		{
			$peopleMap = array();
			foreach($peoplesInfo as $peopleInfo)
			{
				$scoreInfo = explode(" ", $peopleInfo);			
				$people[$scoreInfo[0]] = array_slice($scoreInfo, 1);
				$nameMap[] = $scoreInfo[0];
				$this->_peopleMap[] = $people;
				unset($people);
			}
		}
		
		if(!empty($this->_peopleMap))
		{
			$score=array();
			$keys = array_keys($this->_peopleMap);	
			$combinations = $this->getCombinations($keys , $teamSize);
			foreach($combinations as $combination)
			{
				$combinationString = implode("", $combination);	
				$score[$combinationString] = $this->getScore($combination);	
			}
		}
		
		unset($this->_peopleMap);
		$idData = array_keys($score, max($score));
		
		$ids = $idData[0];
		$ids = str_split($ids);
		$teams="";
		foreach($ids as $id)
		{
			$teams.= $nameMap[$id].",";	
		}
		
		return $teams;
	}
	
	private function getCombinations($keys, $teamSize)
	{
			$combinatorics = new Math_Combinatorics;
			$combinations = $combinatorics->combinations($keys, $teamSize);
			return $combinations;
	}
	
	private function getTeam($combination)
	{
		$team = array();
		foreach($combination as $index)		
		{
			$team[] = $this->_peopleMap[$index];	
		}
		
		return $team;
	}
	
	private function getScore($combination)
	{
		$team = $this->getTeam($combination);	
		$temp = $team[0];
		$scoreInfo = array_shift($temp);

		$score = 0;
		foreach($combination as $index)
		{
			$score+= $scoreInfo[$index];	
		}
		return $score;
	}
}