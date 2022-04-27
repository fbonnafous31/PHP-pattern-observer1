<?php

    namespace App;

    class AffichageConditions implements Observateur, Affichage {

        private float       $temperature;
        private float       $humidite;

        public function __construct(Sujet $donneesMeteo) {
            $this->donneesMeteo = $donneesMeteo;
            $this->donneesMeteo->enregistrerObservateur($this);
        }

        public function actualiser(float $temperature, float $humidite, float $pression): void {
            $this->temperature = $temperature;
            $this->humidite = $humidite;
            $this->afficher();
        }

        public function afficher() {
            echo "Conditions actuelles : ". $this->temperature . " degrés C et " . $this->humidite . " % d'humidité";
        }

    }

?>