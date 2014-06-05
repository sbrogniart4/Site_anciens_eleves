 <form name="formulaire" method="POST">
<?php
if (!empty($_SESSION['id']))
{
?>
<div id="bande_inscription">

<h1>CARNET D'ADRESSE</h1>
</div></br>

<?php
		try
{
    $bdd = new PDO('mysql:host=localhost;dbname=carnet_adresse', 'root','');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$requete= $bdd->query('SELECT * FROM infos');
		
		
		 echo "<table border=2>";
		 '<tr>';
			
			echo  '<td>id</td>';
			echo '<td>nom</td>';
			echo '<td>prenom</td>';
			echo '<td>adresse</td>';
			echo '<td>telephone</td>';
			echo '<td>mail</td>';
			echo'</tr>';
			
		 while ($ligne = $requete->fetch())
		{	
			
			
			
			if(isset($_POST["insert"]))
			{
			echo '<td>'.$ligne["id"].'</td>';
			echo '<td>'.$ligne["nom"].'</td>';
			echo '<td>'.$ligne["prenom"].'</td>';
			echo '<td>'.$ligne["adresse"].'</td>';
			echo '<td>'.$ligne["telephone"].'</td>';
			echo '<td>'.$ligne["mail"].'</td>';
			echo '</tr>';
			}
			
			
			else if(isset($_POST["updt"]))
			{
			echo '<td>'.$ligne["id"].'</td>';
			echo '<td>'.$ligne["nom"].'</td>';
			echo '<td>'.$ligne["prenom"].'</td>';
			echo '<td>'.$ligne["adresse"].'</td>';
			echo '<td>'.$ligne["telephone"].'</td>';
			echo '<td>'.$ligne["mail"].'</td>';
			echo '<td><input type="radio" name="mod" value="'.$ligne["id"].'"/></td>';
			echo '</tr>';
			}
			
			
			else if(isset($_POST["del"]))
			{
			echo '<td>'.$ligne["id"].'</td>';
			echo '<td>'.$ligne["nom"].'</td>';
			echo '<td>'.$ligne["prenom"].'</td>';
			echo '<td>'.$ligne["adresse"].'</td>';
			echo '<td>'.$ligne["telephone"].'</td>';
			echo '<td>'.$ligne["mail"].'</td>';
			echo '<td><input type="radio" name="sup" value="'.$ligne["id"].'"/></td>';
			echo '</tr>';
	
			}
			
			
			else
			{
			
			
			
			echo '<tr>';
			
			echo '<td>'.$ligne["id"].'</td>';
			echo '<td>'.$ligne["nom"].'</td>';
			echo '<td>'.$ligne["prenom"].'</td>';
			echo '<td>'.$ligne["adresse"].'</td>';
			echo '<td>'.$ligne["telephone"].'</td>';
			echo '<td>'.$ligne["mail"].'</td>';
			}
		}
		
		
			if(isset($_POST["insert"]))
		{
		 
		 echo "ID<input type='text' name='id' value=''/></td>";
		 echo " NOM<input type='text' name='nom' value=''/></td>";
		 echo "PRENOM<input type='text' name='prenom' value=''/></td>";
		 echo "ADRESSE<input type='text' name='adresse' value=''/></td>";
		  echo " TELEPHONE<input type='text' name='telephone' value=''/></td>";
		 echo "MAIL<input type='text' name='mail' value=''/></td>";
		 
		 echo "<input type='submit' name='creer' value='Créer' />";
		 
		}
		
		
		if(isset($_POST["creer"]))
		{
		$req = $bdd->prepare('INSERT INTO infos VALUES(:id, :nom, :prenom, :adresse , :telephone, :mail)');
$req->execute(array(
    'id' => $_POST['id'],
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'adresse' => $_POST['adresse'],
	'telephone' => $_POST['telephone'],
    'mail' => $_POST['mail'],
    ));
 
echo 'Le membre a bien été ajouté !';
	
		}
		
		
		if(isset($_POST["del"]))
			{
			echo "<input type='submit' name='cfrm_del' value='Confirmer' />";
			
			}
		
		
		if(isset($_POST["cfrm_del"]))
		{
		  $delete=$bdd->exec("DELETE FROM infos WHERE id='".$_POST["sup"]."'");
		  
		  echo 'Le membre a bien été supprimé !';
		  
		  
		}
		
				if(isset($_POST["updt"]))
		{
		 
		 
		 echo "nom<input type='text' name='nom' value=''/></td>";
		 echo "prenom<input type='text' name='prenom' value=''/></td>";
		 echo "adresse<input type='text' name='adresse' value=''/></td>";
		 echo "telephone<input type='text' name='telephone' value=''/></td>";
		 echo "mail<input type='text' name='mail' value=''/></td>";
		 echo "<input type='submit' name='cfrm' value='Confirmer' />";
		 
		

    
	}
	
	 if(isset($_POST["cfrm"]))
		{

		 $req = $bdd->prepare("UPDATE infos SET  nom = :nom,prenom= :prenom,adresse= :adresse, telephone= :telephone,mail= :mail  WHERE id='".$_POST["mod"]."'");
	$req->execute(array(
    
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
	'adresse' => $_POST['adresse'],
	  'telephone' => $_POST['telephone'],
    'mail' => $_POST['mail'],    ));
	echo 'Le membre a bien été modifié !';
		}
		
		
		
		  echo "</table>";
		
		   echo "<input type='submit' name='insert' value='Ajouter un membre' /></br>";
		  echo "<input type='submit' name='del' value='Suppression' /></br>";
		  echo "<input type='submit' name='updt' value='Modifier' />";








echo'</form>';

}
else
{
echo'Vous n\'avez pas l\'autorisation d\'accéder à cette page !';
header ("Refresh: 2;URL='index.php?page=accueil'");
}
?>