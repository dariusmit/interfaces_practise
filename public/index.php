<?php

declare (strict_types = 1);

//Itraukiam composer autoloaderi
require __DIR__ . '/../vendor/autoload.php';

$service = new \App\DebtCollectionService();

echo $service->collectDebt(new \App\CollectionAgency());

?>
