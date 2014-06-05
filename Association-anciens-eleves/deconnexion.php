<?php 

session_unset();
session_destroy();
echo'<h1>Déconnexion en cours...</h1>';
header ("Refresh: 3;URL='index.php?page=accueil'");
// Redirection vers page_suivante.php après un délai de 5 secondes
// durant lesquelles la page actuelle (page_premiere.php, par exemple) est affichée

?>
