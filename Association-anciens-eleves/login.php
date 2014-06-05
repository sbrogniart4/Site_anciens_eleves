
	<?php
	
 
if (empty($_SESSION['id'])) //les membres connecte ne peuvent pas s'inscrire
{
?>
	<div id="bande_inscription">

<h1>CONNEXION</h1>
</div>
		
			<section id="article25" class="crayon article-css-25 demoTime">
			<form  name="formulaire" method="POST" action="index.php?page=loginok" >
			 <div>
						 
						 
<fieldset>
<legend>Identité numérique</legend>
<p>
<label for="pseudo">Pseudo</label>
<input id="pseudo" type="text" name="pseudo">
</p>
<p>
<label for="pass">MDP</label>
<input id="pass" type="password" name="pass">
</p>
</fieldset>
<input type="submit" value="Connexion" name="envoyer">
</div>



<?php
				}
	
			else
				{
				echo "<h1>Vous êtes déja connecté</h1>";
				header ("Refresh: 2;URL='index.php?page='accueil'");
				}
					      ?>		
						
					
			