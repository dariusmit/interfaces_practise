<?php

namespace App;

interface DebtCollector {

    // All methods declared in the interface must be public
    // Interface cannot have properties, but can have constants

    //public const MY_CONSTANT = 1;

    public function collect(float $owedAmount);

}

?>
