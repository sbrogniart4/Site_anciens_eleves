<?php
		try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=texte_assoc', 'root','');
	}
		catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}
	


	$bdd->exec("SET CHARACTER SET utf8");
	$requete=$bdd->query('SELECT titre,texte FROM categorie_piedpage2 WHERE id=1');
	while ($ligne = $requete->fetch())	
	{

	

echo"  <center> <h1> ".$ligne["titre"]."</h1> </center> ";
echo $ligne["texte"];
echo'</br><p></p>';
  
}?>