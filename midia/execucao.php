<?php

require_once('modelos/Cd.php');
require_once('modelos/Dvd.php');

$cd = new CD();
$cd->setNome("Red Hot");
$cd->setPreco(5.50);

$dvd = new DVD();
$dvd->setNome("123");
$dvd->setPreco(6.0);

print $cd . "\n" . $dvd . "\n";