<?php
    include 'utils.inc.php';

    start_page('Environnement');

//Correspond à l’adresse IP de celui qui visualise la page.
    echo getenv('REMOTE_ADDR').PHP_EOL;
//Correspond à l’adresse IP du serveur.
    echo getenv('HTTP_HOST').PHP_EOL;
//Correspond au logiciel serveur Web utilisé.
    echo getenv('SERVER_SOFTWARE').PHP_EOL;


    phpinfo();
?>
