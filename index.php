<?php

    use App\AffichageConditions;
    use App\DonneesMeteo;
    require_once ('src/Sujet.php'); 
    require_once ('src/DonneesMeteo.php'); 
    require_once ('src/Affichage.php'); 
    require_once ('src/Observateur.php'); 
    require_once ('src/AffichageConditions.php'); 

    $donneesMeteo = new DonneesMeteo();
    $affichageConditions = new AffichageConditions($donneesMeteo);
    $donneesMeteo->setMesures(25, 65, 1020);

?>