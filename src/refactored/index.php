<?php

include_once 'services/freight.php';

$sedex = new \Services\Sedex();
$pac = new \Services\Pac();
$jadlog = new \Services\Jadlog();
$dhl = new \Services\DHL();
$fedex = new \Services\Fedex();
$tnt = new \Services\TNT();

$weight = 10;

echo 'Weight: ' . $weight . '<br><br>';

$freight = new \Services\Freight($sedex);
echo 'Sedex: ' . $freight->calculate($weight) . '<br>';

$freight = new \Services\Freight($pac);
echo 'Pac: ' . $freight->calculate($weight) . '<br>';

$freight->setService($dhl);
echo 'DHL: ' . $freight->calculate($weight) . '<br>';

$freight->setService($jadlog);
echo 'Jadlog: ' . $freight->calculate($weight) . '<br>';

$freight->setService($fedex);
echo 'Fedex: ' . $freight->calculate($weight) . '<br>';

$freight->setService($tnt);
echo 'TNT: ' . $freight->calculate($weight) . '<br>';
