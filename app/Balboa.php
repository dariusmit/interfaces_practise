<?php

namespace App;

class Balboa implements DebtCollector {

    public function collect(float $owedAmount) {
        return $owedAmount * 0.85;
    }

}

?>
