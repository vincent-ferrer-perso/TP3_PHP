<?php
    session_start();
    if($_SESSION['connexion'] != 'ok')
    {
        die('Erreur d\'authentification');
    }
    else
    {
        $dbLink=mysqli_connect('mysql-vincentferrer.alwaysdata.net',173776,'Vf36@13300')
        or die('Erreur de connexion au serveur: ' .mysqli_connect_error());


        mysqli_select_db($dbLink,'vincentferrer_tp_php')
        or die('Erreur dans la sélection de la base:'.mysqli_error($dbLink));

        $query = 'UPDATE user
                  SET NbConnexion = NbConnexion + 1';

        if(!($dbResult=mysqli_query($dbLink, $query))){
            echo'Erreur dans requête<br/>';               //Affiche le type d'erreur.
            echo'Erreur: '.mysqli_error($dbLink).'<br/>'; //Affiche la requête envoyée.
            echo'Requête: '.$query.'<br/>';
            exit();
        }else{
            echo 'Bonjour '.$id.'<br/>';
            echo 'Votre inscription à bien été enregistrée.'.'<br/>';
            echo '<br/><br/>';
        }






        include "utils.inc.php";
        start_page('logOK');
        echo 'Reussi GOAAAAAALLLLLL';
    }
