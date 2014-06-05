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

ECHO'<H1>MODIFICATION DU TEXTE CONTACTS	</H1>';
echo'</div>';


echo"<div id='bande_inscription'>";

	$bdd->exec("SET CHARACTER SET utf8");
	$requete=$bdd->query('SELECT banderole,texte FROM contacts WHERE id=1');
	
	while ($ligne = $requete->fetch())	
	{

	echo'<h1>'.$ligne["banderole"].'</h1>' ;					
echo'</div>';

echo $ligne["texte"];
  
}
echo'</br></br>';

echo "<input type='submit' name='updt1' value='Modifier Banderole' />";
    echo "<input type='submit' name='updt2' value='Modifier Texte' />";
	
	
	
	 if(isset($_POST["updt1"]))
			{
			echo'</br>';
			echo "<input type='text' name='banderole' value='Modifier banderole' />";
			echo'</br>';
			echo "<input type='submit' name='conf1' value='Confirmer' />";
			}
					
							if(isset($_POST["conf1"]))
							{

							 $req = $bdd->prepare("UPDATE contacts SET banderole= :banderole ");
						$req->execute(array(
						
						'banderole' => $_POST['banderole']));
							echo'</br>';
						echo 'Le texte de la banderole a bien été modifié !';
							}

			
			
			if(isset($_POST["updt2"]))
			{
			echo'</br>';
			echo"<textarea name='texte'value='Modifier texte' ></textarea>";
			echo'</br>';
			echo "<input type='submit' name='conf2' value='Confirmer' />";
		
			
			}
				if(isset($_POST["conf2"]))
							{

							 $req3 = $bdd->prepare("UPDATE contacts SET texte= :texte ");
						$req3->execute(array(
						
						'texte' => $_POST['texte']
						));
							echo'</br>';
						echo 'Le texte du contenu a bien été modifié !';
							}