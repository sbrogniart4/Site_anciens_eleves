<?php
		try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=texte_assoc', 'root','');
	}
		catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}
	
echo"<div id='bande_inscription'>";
	$bdd->exec("SET CHARACTER SET utf8");
	$requete=$bdd->query('SELECT banderole,titre,texte FROM accueil WHERE id=1');
	while ($ligne = $requete->fetch())	
	{

	echo'<h1>'.$ligne["banderole"].'</h1>' ;	
echo'</div>';
echo"  <center> <h3> ".$ligne["titre"]."</h3> </center> ";
echo $ligne["texte"];
echo'</br><p></p></br></br>';
  
}


echo"<div id='news'>";
		echo"<div id='bande_inscription_news'>";
		$requete2=$bdd->query('SELECT banderole,texte FROM news WHERE id=1');

		while ($ligne = $requete2->fetch())	
			{
				echo'<h3>'.$ligne["banderole"].'</h3>' ;	
				echo'</div>';
				echo"<div id='texte_news'>";
				echo $ligne["texte"];
				echo"</div>";
			}
echo"</div>";
	
	
	

echo"<div id='contacts'>";
		echo"<div id='bande_inscription_contacts'>";
		$requete3=$bdd->query('SELECT banderole,texte FROM contacts WHERE id=1');

		while ($ligne = $requete3->fetch())	
			{
				echo'<h3>'.$ligne["banderole"].'</h3>' ;	
				echo'</div>';
				echo"<div id='texte_contacts'>";
				echo $ligne["texte"];
				echo"</div>";
			}
echo"</div>";


	
	// Déconnexion de la BDD
unset( $bdd );
?>


			