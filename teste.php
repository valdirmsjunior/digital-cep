<?php

require_once "vendor/autoload.php";

use DigitalCep\Search;

$busca = new Search();

$result = $busca->getEnderecoCep('60040290');

print_r($result);