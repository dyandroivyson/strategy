<?php

class DHL
{
	public function priceCalculator(float $weight): float
	{
		return $weight * 6.99;
	}
}
