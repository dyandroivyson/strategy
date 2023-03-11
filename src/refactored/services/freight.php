<?php

namespace Services;

include_once 'shipping/correios.php';
include_once 'shipping/dhl.php';
include_once 'shipping/fedex.php';
include_once 'shipping/jadlog.php';
include_once 'shipping/tnt.php';

interface FreightService
{
	public function calculate(float $weight): float;
}

class Sedex implements FreightService
{
    public function calculate(float $weight): float
	{
        $correios = new \Correios();
		
        return $correios->shippingCalculate('SEDEX', $weight);
    }
}

class Pac implements FreightService
{
    public function calculate(float $weight): float
	{
        $correios = new \Correios();
		
        return $correios->shippingCalculate('PAC', $weight);
    }
}

class Jadlog implements FreightService
{
    public function calculate(float $weight): float
	{
        $jadlog = new \Jadlog();
			
		return $jadlog->priceCalculator($weight);
    }
}

class DHL implements FreightService
{
    public function calculate(float $weight): float
	{
        $dhl = new \DHL();
			
		return $dhl->priceCalculator($weight);
    }
}

class Fedex implements FreightService
{
    public function calculate(float $weight): float
	{
        $fedex = new \Fedex();
			
		return $fedex->shippingPrice($weight);
    }
}

class TNT implements FreightService
{
    public function calculate(float $weight): float
	{
        $tnt = new \TNT();
			
		return $tnt->shippingPriceCalculator($weight);
    }
}

class Freight
{
    public function __construct(
        private FreightService $service,
    ) {}

    public function setService(FreightService $service): void
    {
        $this->service = $service;
    }

    public function calculate(float $weight): float
    {
        return $this->service->calculate($weight);
    }
}
