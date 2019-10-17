<?php
    $dbLink=mysqli_connect('mysql-vincentferrer.alwaysdata.net',173776,'Vf36@13300')
    or die('Erreur de connexion au serveur: ' .mysqli_connect_error());


    mysqli_select_db($dbLink,'vincentferrer_tp_php')
    or die('Erreur dans la sélection de la base:'.mysqli_error($dbLink));



    $query='SELECT NomUtilisateur,Mail,DateInscription FROM user';

    if(!($dbResult=mysqli_query($dbLink, $query))){
        echo'Erreur de requête<br/>';//Affiche le type d'erreur
        echo 'Erreur: '.mysqli_error($dbLink).'<br/>';//Affiche la requête envoyée.
        echo 'Requête: '.$query.'<br/>';
        exit();
    }


    while($dbRow=mysqli_fetch_assoc($dbResult)){
        echo 'Nom d\'utilisateur : '.$dbRow['NomUtilisateur' ].'<br/>';
        echo 'Mail : '.$dbRow['Mail'           ].'<br/>';
        echo 'Date d\'inscription : '.date('d/m/Y',strtotime($dbRow['DateInscription'])).'<br/>';
        echo '<br/><br/>';

    }