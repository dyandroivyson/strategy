<?php

include_once 'services/freight.php';

$freight = new \Services\Freight();
$weight = 10;

echo 'Weight: ' . $weight . '<br><br>';

echo 'Sedex: ' . $freight->calculate('sedex', $weight) . '<br>';
echo 'Pac: ' . $freight->calculate('pac', $weight) . '<br>';
echo 'Jadlog: ' . $freight->calculate('jadlog', $weight) . '<br>';
echo 'DHL: ' . $freight->calculate('dhl', $weight) . '<br>';
echo 'Fedex: ' . $freight->calculate('fedex', $weight) . '<br>';
echo 'TNT: ' . $freight->calculate('tnt', $weight) . '<br>';