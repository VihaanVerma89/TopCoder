<?php

class ImageDithering
{
	public function count($dithered, $screen)
	{
		$ditheredArray = str_split($dithered);	
		$count = 0;		

		foreach($screen as $row)
		{
			$pixelGroup = array_count_values(str_split($row));
			foreach ($ditheredArray as $pixel)
			{
				if(array_key_exists($pixel, $pixelGroup))
				{
					$count += $pixelGroup[$pixel];	
				}
			}

		}
		return $count;
	}
}