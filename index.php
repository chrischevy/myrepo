<?php
$VALEUR_hote='paris2018.cmnvzvombnsh.eu-west-3.rds.amazonaws.com';
$VALEUR_port='3306';
$VALEUR_nom_bd='paris2018';
$VALEUR_user='paris2018';
$VALEUR_mot_de_passe='paris2018';
$connexion = new PDO('mysql:host='.$VALEUR_hote.';port='.$VALEUR_port.';dbname='.$VALEUR_nom_bd, $VALEUR_user, $VALEUR_mot_de_passe);
$resultats=$connexion->query("SELECT * FROM student ");
$resultats->setFetchMode(PDO::FETCH_OBJ);
while( $resultat = $resultats->fetch() )
{
        echo 'stagiaire : '.$resultat->nom.'<br>';
}
$resultats->closeCursor();
?>
