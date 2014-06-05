<html>
<head>
 <link href="style.css" rel="stylesheet" type="text/css" />
<meta charset="utf-8">
</head>
<body>

<div id='page'>
				<div id="contenu">
				
						
	<?php	

if (isset($_POST['send']))
{
		//Si les variables contenant les informations obligatoires et qu'elles ne sont pas vides:
		if (isset( $_POST['nom'], $_POST['prenom'],$_POST['pays'],$_POST['classe'], $_POST['email'], $_POST['adresse'],$_POST['codepostal'],$_POST['ville'],$_POST['date'],$_POST['fixe'],$_POST['portable'],$_POST['cursus'],$_POST['anneeD'],$_POST['anneeF'],$_POST['login'],$_POST['mdp']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['pays']) && !empty($_POST['classe'])   && !empty($_POST['email']) &&  !empty($_POST['adresse'])&& !empty($_POST['codepostal'])&& !empty($_POST['ville']) && !empty($_POST['date'])&& !empty($_POST['fixe'])&& !empty($_POST['portable']) && !empty($_POST['cursus']) && !empty($_POST['anneeD']) && !empty($_POST['anneeF']) && !empty($_POST['login']) && !empty($_POST['mdp']))
		{		
			
			
					
							
							   //Envoi du mail de confirmation					       
$nom=$_POST['nom'];
$class=$_POST['classe'];
$date=$_POST['date'];
$mail=$_POST['email'];
$pays=$_POST['pays'];
$fixe=$_POST['fixe'];
$portable=$_POST['portable'];
$adresse=$_POST['adresse'];
$codepostal=$_POST['codepostal'];
$ville=$_POST['ville'];
$cursus=$_POST['cursus'];
$anneeD=$_POST['anneeD'];
$anneeF=$_POST['anneeF'];
$login=$_POST['login'];
$mdp=$_POST['mdp'];



			                        $prenom=$_POST['prenom'];
									$to='sebastien.brogniart57570@gmail.com';
									$subject='Inscription association des anciens eleves';
								
									$message = 'Bonjour, '.$prenom.' veut s\'inscrire  sur le site de l association des anciens élèves du Lycée Raymond Poincaré de Bar le Duc.Vous pouvez le contacter à l\adresse email suivante :'.$mail;
				
									$headers='From: Administrateur du site des anciens élèves <anciens-poincare@outlook.fr>';
								
								
								
								if(mail($to, $subject, $message, $headers))
									{
								
								

								
										echo"Association des anciens élèves du lycée Raymond Poincaré à Bar-Le-Duc";
										
										
										echo"<img src='images/poincare.png'/><strong><FONT size='7pt'>
										<center>Fiche récapitulative de $prenom $nom</center></font></strong><br>" ;
										
										echo "<center>Page récapitulative de toutes les informations que vous avez entré dans le formulaire de la page précédante,pensez à sauvegarder cette fiche</center></br> 
										<table>
										<tr>
											<td>
											
											<center><b>INFORMATIONS GENERALES</b></center></br>
											</td>
										</tr>
											<tr>
												<td>
													 prénom: $prenom </br> 
												</td>
											</tr>
											<tr>
												<td>
													 nom: $nom </br> 
												</td>
											</tr>
											
											<tr>
												<td>
													 date de naissance: $date </br> 
												</td>
											</tr>
											<tr>
												<td>
													Le pays dans lequel vous vivez : $pays  </br>
												</td>
											</tr>
											
										<tr>
											<td> 
												adresse: $adresse
											</td>
										</tr>
										
										<tr>
											<td> 
												code postal:$codepostal
											</td>
										</tr>
										
										<tr>
											<td> 
												Ville: $ville
											</td>
										</tr>
										<tr>
											<td> 
												Votre numéro de téléphone fixe: $fixe
											</td>
										</tr>
										
										<tr>
											<td> 
												Votre numéro de téléphone portable: $portable
											</td>
										</tr>
										
										
										<tr>
										<td>
											Année d'étude au lycée Raymond Poincaré : de $anneeD à $anneeF
										</td>
										</tr>
											
											<tr>
												<td>
													Votre dernière classe fréquentée au lycée Raymond Pouncaré:  $class
												</td>
											</tr>
											
											
											
										</table></br>";
										
										echo"<center><b>INFORMATIONS PROFESSIONNELLES</b></center></br>
										<table>
										
										
												<td>
													Votre cursus scolaire et professionnel: $cursus 
												</td>
										</tr>
										
										</table>";
										
										echo"<center><b>INFORMATIONS SUR LE COMPTE</b></center></br>
										
										<table>
											<tr>
												<td>
													Login suggéré : $login
												</td>
											</tr>
										
											<tr>
												<td>
													Mot de passe suggéré : $mdp
												</td>
											</tr>
										</table>";
										
										echo"<a href='http://www.printfriendly.com'
											style='color:#6D9F00;text-decoration:none;'class='printfriendly' onclick='window.print();return false;'
											title='Imprimer / PDF'>
											Cliquez ici pour enregistrer cette page en PDF ou l imprimer</a>";
								
									}
									else
						
										echo'Erreur mail non envoyé !';
									
		
}
else 'erreur lors de l\'envoi du formulaire, veuillez reessayer, nous nous excuser';
}
?>	

 
</div>
	
			    </div>
				
			
		  
</body>
	</html>
		