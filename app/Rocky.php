<?php

namespace App;

class Rocky implements DebtCollector {

    public function collect(float $owedAmount) {
        return $owedAmount * 0.65;
    }

}

?>
