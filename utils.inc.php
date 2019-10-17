<?php
function start_page($title){
    echo ' <!DOCTOTYPE html><html 
            lang="fr"><head><title>'.PHP_EOL.$title.'</title></head><body>'.PHP_EOL;

    echo '<hr><strong>'.$title.'</strong></hr><br/>';
    echo '<hr></hr>';
};

function end_page(){
    echo '</body><footer>pied de page</footer></html>';
};

function lienBD(){
    $dbLink=mysqli_connect('mysql-vincentferrer.alwaysdata.net',173776,'Vf36@13300')
    or die('Erreur de connexion au serveur: ' .mysqli_connect_error());


    mysqli_select_db($dbLink,'vincentferrer_tp_php')
    or die('Erreur dans la sélection de la base:'.mysqli_error($dbLink));
};




?>