<?php
$VALEUR_hote='mariadb.chv5difr8xme.eu-west-3.rds.amazonaws.com';
$VALEUR_port='3306';
$VALEUR_nom_bd='MariaDB';
$VALEUR_user='adminDB';
$VALEUR_mot_de_passe='adminDB!';
$connexion = new PDO('mysql:host='.$VALEUR_hote.';port='.$VALEUR_port.';dbname='.$VALEUR_nom_bd, $VALEUR_user, $VALEUR_mot_de_passe);

$resultats=$connexion->query("SELECT * FROM students ");
$resultats->setFetchMode(PDO::FETCH_OBJ);
while( $resultat = $resultats->fetch() )
{
        echo 'stagiaire : '.$resultat->nom.'<br>';
}
$resultats->closeCursor();

?>

