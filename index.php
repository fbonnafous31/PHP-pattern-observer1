<?php

    use App\AffichageConditions;
    use App\DonneesMeteo; 
    
    require_once ('libraries/autoload.php');

    $donneesMeteo = new DonneesMeteo();
    $affichageConditions = new AffichageConditions($donneesMeteo);
    $donneesMeteo->setMesures(25, 65, 1020);

?>