<?php
if (empty($_SESSION['id']))
{
?>
<div id="bande_inscription">

<h1>FORMULAIRE D'INSCRIPTION</h1>
</div></br>
<form name="formulaire" class="form" method="POST" action="fiche_recapitulative.php">

	<p class="name">
	<label for="nom">Nom</label>
		<input type="text" name="nom" id="nom" />
		
	</p></br>

	<p class="prenom">
	<label for="prenom">Prénom</label>
		<input type="text" name="prenom" id="prenom" />
		
	</p></br>

	<p class="Date">
	<label for="date">Date de naissance</label>
		<input type="date" name="date" id="date" />
		
	</p></br>
	
	<p class="Pays">
	<label for="pays">Pays</label>
		<select  name='pays'/></br>
			<option value="France" selected="selected">France </option>
			<option value="Etats-Unis">Etats-Unis </option>
		</select>
	</p></br>
	
	<p class="anneeD">
	<label for="anneeD">Année de début de scolarité à Bar-Le-Duc</label>
		<?php
											// Variable qui ajoutera l'attribut selected de la liste déroulante
											$selected = '';
											// Parcours du tableau
											echo '<select name="anneeD">',"\n";
											for($i=1930; $i<=2013; $i++)
											{
											// L'année est-elle l'année courante ?
											if($i == date('Y'))
											{
											$selected = ' selected="selected"';
											}
											// Affichage de la ligne
											echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
											// Remise à zéro de $selected
											$selected='';
											}
											echo '</select>',"\n";
				?>
		
	</p></br>
	
	<p class="anneeF">
	<label for="anneeF">	Année de fin de scolarité à Bar-Le-Duc</label>
		<?php
											// Variable qui ajoutera l'attribut selected de la liste déroulante
											$selected = '';
											// Parcours du tableau
											echo '<select name="anneeF">',"\n";
											for($i=1930; $i<=2013; $i++)
											{
											// L'année est-elle l'année courante ?
											if($i == date('Y'))
											{
											$selected = ' selected="selected"';
											}
											// Affichage de la ligne
											echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
											// Remise à zéro de $selected
											$selected='';
											}
											echo '</select>';
											?>
		
	</p></br>
	
	<p class="classe">
	<label for="classe">Niveau d'étude atteint à l'école Raymond Poincaré</label>
		 <select  name='classe' ></br>
		 	<option value="élémentaire" selected="selected">Brevet des collèges </option>
											
											
											
										<option value="collège">Baccalauréat(BAC) </option>
											
											
										<option value="lycée">Brevet de technicien supérieur(BTS) </option>
											
											
										
										</select></br></br>
										
		
	</p>
	
	<p class="adresse">
	<label for="adresse">Adresse</label>
		<input type="text" name="adresse" id="adresse" />
		
	</p></br>
	
	<p class="codepostal">
	<label for="codepostal">Code postal</label>
		<input type="text" name="codepostal" id="date" />
		
	</p></br>
	
	<p class="ville">
		<label for="ville">Ville</label>
		<input type="text" name="ville" id="ville" />
	
	</p></br>
	
	<p class="fixe">
		<label for="fixe">Numéro de téléphone fixe </label>
		<input type="text" name="fixe" id="fixe" />
	
	</p></br>
	
	<p class="portable">
	<label for="portable">Numéro de téléphone portable </label>
		<input type="text" name="portable" id="portable" />
		
	</p></br>
	
	<p class="email">
	<label for="email">E-mail </label>
	 <input type="text" name="email" id="email" size="30" /><br/>
		
		
	</p></br>
	

	<p class="cursus">
		<label for="cursus">Cursus </label>
		<textarea name="cursus"></textarea>
		
	</p></br>
	
	
	
				
				<h3>Si vous souhaitez la création d'un compte veuillez nous suggérer un login et un mot de passe</h3></br>
				
				<p class="login">
	<label for="pseudo">Login </label>
	 <input type="text" name="login" id="login" size="16" /><br/>
	 </p></br>
	 
	 		<p class="mdp">
	<label for="mdp">Mot de passe </label>
	 <input type="password" name="mdp" id="mdp" size="16" /><br/>
	

	<p class="submit">
		<input type="submit" name="send" value="Envoyer" />
	</p></br>

</form>
<?php
}
else
{
echo'<h1>Vous êtes déja inscrit !</h1>';
header ("Refresh: 2;URL='index.php?page=accueil'");

}
