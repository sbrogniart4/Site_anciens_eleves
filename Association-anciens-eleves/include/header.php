	
			<div id="page">
				<div id="header">
				
					<div id="img_titre_head">
						<img src="images/lycee1.jpg" />
					</div>
					<div id="textbandeau">
						<span>ASSOCIATION DES ANCIENS ÉLÈVES<span>
					</div>
				</div>
				<?php
				
				 if (empty($_SESSION['id']))
				 {
				 ?>
				<div id="bande">
					 <a href="index.php?page=accueil"><img class='img' src="images/accueil2.gif" alt="Retour à l'accueil"><span> Retour à l'accueil</span></a>
					<a href="http://www.poincare55.ac-nancy-metz.fr/index.php"><img class='img2' src="images/terre.png" alt="Retour au site du lycée"><span> Site du lycée  </span></a>
					
						
					
					<?php
					}
					else
					{
					?>
					<div id="bande">
					<a href="index.php?page=accueil"><img class='img' src="images/accueil2.gif" alt="Retour à l'accueil"><span> Retour à l'accueil</span></a>
					<a href="http://www.poincare55.ac-nancy-metz.fr/index.php"><img class='img2' src="images/terre.png" alt="Retour au site du lycée"><span> Site du lycée  </span></a>
						<div id="bande_connecte"><a href="admin/index_admin.php"><img class='img3' src="images/button-setting1.png" alt="Retour au site du lycée"><span> Options admin </span></a>
				<?php echo"<span>	<b>Bienvenue ".$_SESSION['pseudo']." <a href='index.php?page=deconnexion'>DECONNEXION</b></a></span>";
				?>
						</div>
						
					<?php
					}
					?>
				</div>