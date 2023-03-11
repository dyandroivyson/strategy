<?php

namespace Services;

include_once 'shipping/correios.php';
include_once 'shipping/dhl.php';
include_once 'shipping/fedex.php';
include_once 'shipping/jadlog.php';
include_once 'shipping/tnt.php';

class Freight
{
	public function calculate(string $service, float $weight): float
	{
		if ($service === 'sedex') {
			$correios = new \Correios();
			
			return $correios->shippingCalculate('SEDEX', $weight);
		} else if ($service === 'pac') {
			$correios = new \Correios();
			
			return $correios->shippingCalculate('PAC', $weight);
		} else if ($service === 'jadlog') {
			$jadlog = new \Jadlog();
			
			return $jadlog->priceCalculator($weight);
		} else if ($service === 'dhl') {
			$dhl = new \DHL();
			
			return $dhl->priceCalculator($weight);
		} else if ($service === 'fedex') {
			$fedex = new \Fedex();
			
			return $fedex->shippingPrice($weight);
		} else if ($service === 'tnt') {
			$tnt = new \TNT();
			
			return $tnt->shippingPriceCalculator($weight);
		} else {
			throw new \Exception('invalid freight service');
		}
	}
}
