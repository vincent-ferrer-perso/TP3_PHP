<?php
    //Ouverture fic en lecture
    $file='data.txt';
    if(!($file=fopen($file,'r'))){
        echo'Erreurdelecture';
        exit();
    }

    //Lecture données
    echo 'Listedesutilisateurs:<br/>';
    $cpt=1;
    while($line=fgets($file,255)) {
        echo 'Utilisateurn' .$cpt. ': '.$line. '<br/>';
        ++$cpt;
    }

    fclose($file);