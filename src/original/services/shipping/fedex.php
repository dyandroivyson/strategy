<?php

class Fedex
{
	public function shippingPrice(float $weight): float
	{
		return $weight * 8;
	}
}
