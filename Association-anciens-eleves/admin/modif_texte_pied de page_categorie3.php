<form name="formulaire" method="POST">
<?php
		try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=texte_assoc', 'root','');
	}
		catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}
	
echo"<div id='bande_inscription1'>";

ECHO'<H1>MODIFICATION DE LA CATEGORIE 3 DU PIED DE PAGE</H1>';
echo'</div>';


	$bdd->exec("SET CHARACTER SET utf8");
	$requete=$bdd->query('SELECT nom_categorie,titre,texte FROM  categorie_piedpage3 WHERE id=1');
	
	while ($ligne = $requete->fetch())	
	{

	echo'<h1>Le nom de cette catégorie est : '.$ligne["nom_categorie"].'</h1>' ;					

echo"  <center> <h3> ".$ligne["titre"]."</h3> </center> ";
echo $ligne["texte"];
  
}
echo'</br></br>';

echo "<input type='submit' name='updt1' value='Modifier Catégorie' />";
  echo "<input type='submit' name='updt2' value='Modifier Titre' />";
    echo "<input type='submit' name='updt3' value='Modifier Texte' />";
	
	if(isset($_POST["updt1"]))
			{
			echo'</br>';
			echo "<input type='text' name='nom_categorie' value='Modifier nom de la categorie' />";
			echo'</br>';
			echo "<input type='submit' name='conf1' value='Confirmer' />";
			}
					
							if(isset($_POST["conf1"]))
							{

							 $req = $bdd->prepare("UPDATE categorie_piedpage3 SET nom_categorie= :nom_categorie ");
						$req->execute(array(
						
						'nom_categorie' => $_POST['nom_categorie']));
							echo'</br>';
						echo 'Le texte du nom de la catégorie a bien été modifié !';
							}
					
			
			
			
			if(isset($_POST["updt2"]))
			{
			echo'</br>';
			echo "<input type='text' name='titre' value='Modifier titre' />";
			echo'</br>';
			echo "<input type='submit' name='conf2' value='Confirmer' />";
			}
								if(isset($_POST["conf2"]))
							{

							 $req2 = $bdd->prepare("UPDATE categorie_piedpage3 SET titre= :titre ");
						$req2->execute(array(
						
						'titre' => $_POST['titre']
						));
							echo'</br>';
						echo 'Le texte du titre a bien été modifié !';
							}
		
			
			
			
			if(isset($_POST["updt3"]))
			{
			echo'</br>';
			echo"<textarea name='texte'value='Modifier texte' ></textarea>";
			echo'</br>';
			echo "<input type='submit' name='conf3' value='Confirmer' />";
		
			
			}
				if(isset($_POST["conf3"]))
							{

							 $req3 = $bdd->prepare("UPDATE categorie_piedpage3 SET texte= :texte ");
						$req3->execute(array(
						
						'texte' => $_POST['texte']
						));
							echo'</br>';
						echo 'Le texte du contenu a bien été modifié !';
							}

	
	
?>
</form>
			