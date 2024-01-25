<?php

namespace App;

class CollectionAgency implements DebtCollector {

    public function collect(float $owedAmount) {
        $guaranteed = $owedAmount * 0.5;
        return mt_rand($guaranteed, $owedAmount);
    }

}

?>
