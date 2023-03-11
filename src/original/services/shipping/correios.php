<?php

class Correios
{
	public function shippingCalculate(string $service, float $weight): float
	{
		if ($service === 'SEDEX') {
			return $weight * 0.03;
		}
		
		if ($service === 'PAC') {
			return $weight * 0.01;
		}
		
		return $weight;
	}
}
