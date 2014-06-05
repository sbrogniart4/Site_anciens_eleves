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
			
			
			
		
			echo '<tr>';
			
			echo '<td>'.$ligne["id"].'</td>';
			echo '<td>'.$ligne["nom"].'</td>';
			echo '<td>'.$ligne["prenom"].'</td>';
			echo '<td>'.$ligne["adresse"].'</td>';
			echo '<td>'.$ligne["telephone"].'</td>';
			echo '<td>'.$ligne["mail"].'</td>';
			}
		}
		
		

else
{
echo'Vous n\'avez pas l\'autorisation d\'accéder à cette page !';
header ("Refresh: 2;URL='index.php?page=accueil'");
}
?>