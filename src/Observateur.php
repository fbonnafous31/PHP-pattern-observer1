<?php

    namespace App;

    interface Observateur {

        public function actualiser(float $temperature, float $humidite, float $pression): void;

    }

?>