<?php

    namespace App;

    interface Sujet {
    
        public function enregistrerObservateur(Observateur $observateur);
        public function supprimerObservateur(Observateur $observateur);      
        public function notifierObservateurs();
        
    }    

?>