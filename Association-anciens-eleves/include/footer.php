<?php
		try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=texte_assoc', 'root','');
	}
		catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}

?>
<div id="bande2">
				
				</div>
				
				<div id="piedpagehaut">
				
				</div>
				
				
					
					
					<div id="bande3"></div>
					
				
					
				
				
				
				<div id="bande4">
				
				</div>
				
				<div id="piedpagebas2">
					<?php
					echo'<div id="categories">';
						echo'<a class="Qui_sommes_nous" href="index.php?page=piedpage_categorie1" alt="cliquez ici">';
						$requete=$bdd->query("SELECT nom_categorie FROM categorie_piedpage1 WHERE id=1");
	
	while ($ligne = $requete->fetch())	
	{

	
	echo $ligne["nom_categorie"] ;		
						
					echo'	</a>&nbsp&nbsp';
}
				
				
					
		
						echo'<a class="trucs1" href="index.php?page=piedpage_categorie3" alt="cliquez ici">';
						$requete3=$bdd->query("SELECT nom_categorie FROM categorie_piedpage3 WHERE id=1");
						while ($ligne = $requete3->fetch())	
	{

	
	echo $ligne["nom_categorie"] ;		
						echo'</a></br></br>';
						}
							echo'</div>';
						?>
						
					
				© copyright 2013 - Association des anciens élèves Lycée Raymond Poincaré  -Tous droits réservés </br>
				Hébergement : infomaniak • Création et développement WP : Brogniart Sébastien & Gabriel Giroud
				</div>
				
					
			
	      
		  
		  
		  
		  
		  
