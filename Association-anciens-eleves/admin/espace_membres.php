<html>
 <head><title>Programme</title></head>
  <body>
   <form name="formulaire" method="POST">
	<?php
		try
{
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membres', 'root','');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
		echo"<h1>Espace gestion des logins </h1>";
		$requete= $bdd->query('SELECT * FROM membres');
		
		
		 echo "<table border=2>";
		 '<tr>';
			
			echo  '<td>id</td>';
			echo '<td>Pseudo</td>';
			echo '<td>Mot de passe</td>';
			echo '<td>Autorisation</td>';
			echo'</tr>';
			
		 while ($ligne = $requete->fetch())
		{	
			
			
			
			if(isset($_POST["insert"]))
			{
			echo '<td>'.$ligne["id"].'</td>';
			echo '<td>'.$ligne["pseudo"].'</td>';
			echo '<td>'.$ligne["pass"].'</td>';
			echo '<td>'.$ligne["autorisation"].'</td>';
			echo '</tr>';
			}
			
			
			else if(isset($_POST["updt"]))
			{
			echo '<td>'.$ligne["id"].'</td>';
			echo '<td>'.$ligne["pseudo"].'</td>';
			echo '<td>'.$ligne["pass"].'</td>';
			echo '<td>'.$ligne["autorisation"].'</td>';
			echo '<td><input type="radio" name="mod" value="'.$ligne["id"].'"/></td>';
			echo '</tr>';
			}
			
			
			else if(isset($_POST["del"]))
			{
			echo '<td>'.$ligne["id"].'</td>';
			echo '<td>'.$ligne["pseudo"].'</td>';
			echo '<td>'.$ligne["pass"].'</td>';
			echo '<td>'.$ligne["autorisation"].'</td>';
			echo '<td><input type="radio" name="sup" value="'.$ligne["id"].'"/></td>';
			echo '</tr>';
	
			}
			
			
			else
			{
			
			
			
			echo '<tr>';
			
			echo '<td>'.$ligne["id"].'</td>';
			echo '<td>'.$ligne["pseudo"].'</td>';
			echo '<td>'.$ligne["pass"].'</td>';
			echo '<td>'.$ligne["autorisation"].'</td>';
			}
		}
		
		
			if(isset($_POST["insert"]))
		{
		 
		 echo "ID<input type='text' name='id' value=''/></td>";
		 echo " PSEUDO<input type='text' name='pseudo' value=''/></td>";
		 echo "MOT DE PASSE<input type='text' name='pass' value=''/></td>";
		 echo "AUTORISATION<input type='text' name='autorisation' value=''/></td>";
		 echo "<input type='submit' name='creer' value='Créer' />";
		 
		}
		
		
		if(isset($_POST["creer"]))
		{
		$req = $bdd->prepare('INSERT INTO membres VALUES(:id, :pseudo, :pass, :autorisation)');
$req->execute(array(
    'id' => $_POST['id'],
    'pseudo' => $_POST['pseudo'],
    'pass' => $_POST['pass'],
    'autorisation' => $_POST['autorisation'],
    ));
 
echo 'Le membre a bien été ajouté !';
	
		}
		
		
		if(isset($_POST["del"]))
			{
			echo "<input type='submit' name='cfrm_del' value='Confirmer' />";
			
			}
		
		
		if(isset($_POST["cfrm_del"]))
		{
		  $delete=$bdd->exec("DELETE FROM membres WHERE id='".$_POST["sup"]."'");
		  
		  echo 'Le membre a bien été supprimé !';
		  
		  
		}
		
				if(isset($_POST["updt"]))
		{
		 
		 
		 echo "Pseudo<input type='text' name='pseudo' value=''/></td>";
		 echo "Mot de passe<input type='text' name='pass' value=''/></td>";
		 echo "Autorisation<input type='text' name='autorisation' value=''/></td>";
		 echo "<input type='submit' name='cfrm' value='Confirmer' />";
		 
		

    
	}
	
	 if(isset($_POST["cfrm"]))
		{

		 $req = $bdd->prepare("UPDATE membres SET  pseudo = :pseudo,pass= :pass,autorisation= :autorisation  WHERE id='".$_POST["mod"]."'");
	$req->execute(array(
    
    'pseudo' => $_POST['pseudo'],
    'pass' => $_POST['pass'],
	'autorisation' => $_POST['autorisation']
    ));
	echo 'Le membre a bien été modifié !';
		}
		
		
		
		  echo "</table>";
		
		   echo "<input type='submit' name='insert' value='Ajouter un membre' />";
		  echo "<input type='submit' name='del' value='Suppression' />";
		  echo "<input type='submit' name='updt' value='Modifier' />";
		  
		
	?>
  </form>
 </body>
</html>