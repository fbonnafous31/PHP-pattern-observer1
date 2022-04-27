<?php

    namespace App;

    class DonneesMeteo implements Sujet {

        private array $observateurs;
        private float $temperature;
        private float $humidite;
        private float $pression;

        public function enregistrerObservateur(Observateur $observateur): void {
            $this->observateurs[] = $observateur;
        }

        public function supprimerObservateur(Observateur $observateur): void {
            $key = array_search($observateur, $this->observateurs); 
            if (false !== $key) {
                unset($this->observateurs[$key]);
            }
        }   

        public function notifierObservateurs(): void {
            foreach ($this->observateurs as $observateur) {
                $observateur->actualiser($this->temperature, $this->humidite, $this->pression);
            }
        }

        public function actualiserMesures(): void {
            $this->notifierObservateurs();
        }

        public function setMesures (float $temperature, float $humidite, float $pression): void {
            $this->temperature = $temperature;
            $this->humidite = $humidite;
            $this->pression = $pression;
            $this->actualiserMesures();
        }

    }

?>