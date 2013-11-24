<?php
	class ProfitCalculator
	{
		public function percent($items)
		{
			$totalSellingPrice = 0;
			$totalCostPrice = 0;
			foreach ($items as $item)
			{
				list($sellingPrice, $costPrice) = explode(" ", $item);		

				$totalSellingPrice+=$sellingPrice;
				$totalCostPrice+=$costPrice;
			}

			$profit = $totalSellingPrice - $totalCostPrice;

			if($profit)
			{
				$marginPercent = ($profit/$totalSellingPrice) * 100;
				$margin = floor($marginPercent);
				return $margin;
			}
		}
	}
