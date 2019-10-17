<?php
    session_start();
    if($_SESSION['connexion'] != 'ok')
    {
        die('Erreur d\'authentification');
    }
    else
    {
        include "utils.inc.php";
        start_page('logOK');
        echo 'Reussi GOAAAAAALLLLLL';
    }
