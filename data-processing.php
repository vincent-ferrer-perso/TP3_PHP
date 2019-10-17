<?php

    $id       = $_POST['id'      ];
    $civilite = $_POST['civilite'];
    $mail     = $_POST['e-mail'  ];
    $mdp      = $_POST['mdp'     ];
    $mdpV     = $_POST['mdpV'    ];
    $pays     = $_POST['pays'    ];
    $action   = $_POST['action'  ];

    $mdp = md5($mdp);

    $message = 'Voici vos identifiants d\'inscription: ' .$id."\n".
                'Email:' .$mail."\n".
                'Mot de passe: '.$mdp."\n".
                'Pays: '.$pays."\n";


    if($action=='mailer'){
        mail('EntrerMailDuRecepteur','TD2 Identifiants',$message);

    }else{
        echo'<br/><strong>Bouton non géré!</strong><br/>';
    }



    $dbLink=mysqli_connect('mysql-vincentferrer.alwaysdata.net',173776,'Vf36@13300')
    or die('Erreur de connexion au serveur: ' .mysqli_connect_error());


    mysqli_select_db($dbLink,'vincentferrer_tp_php')
    or die('Erreur dans la sélection de la base:'.mysqli_error($dbLink));

    $query = 'INSERT INTO user(NomUtilisateur,Civilite,Mail,MotDePasse,Pays) 
                VALUES (\''.$id.'\',\''.$civilite.'\',\''.$mail.'\',\''.$mdp.'\',\''.$pays.'\')';

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