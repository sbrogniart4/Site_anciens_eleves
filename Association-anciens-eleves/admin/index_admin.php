<!doctype html>
<html lang="fr">
	<head>
		</style>
	
		
	<meta charset="utf-8">
	
	
			<?php
			session_start();
			include('include_admin/style_CSS2.php');
			
				?>
	
		<title>
		Association des anciens &eacutel&eacuteves du Lyc&eacutee Raymond Poincar&eacute de Bar-Le-Duc
		</title>
	</head>
	
	<body>
	
		<?php 

	 if (!empty($_SESSION['id'])) 
	 {
	 ?>
		<div id='page'>
			<?php
			
			include('include_admin/header.php');
			
			
			?>
			
			
			
			<?php
			include('include_admin/menu.php');
				?>
				
				
	
	
	
				<div id="contenu_admin">
				
						<?php
		
		//Tableau des pages autorisées à l'include

$pagesOK['accueil'] = 'accueil.php';

$pagesOK['adherer'] = 'page_adherer2.php';

$pagesOK['login'] = 'login.php';

$pagesOK['loginok'] = 'loginok.php';

$pagesOK['association'] = 'association.php';

$pagesOK['livre'] = 'livre.php';

$pagesOK['404'] = '404.php';

$pagesOK['fiche_recap'] = 'fiche_recapitulative.php';

$pagesOK['deconnexion'] = 'deconnexion.php';

$pagesOK['options'] = '..admin/options.php';
 
 $pagesOK['supprimer'] = 'supprimer.php';
 
 $pagesOK['accueil_administration'] = 'accueil_administration.php';
 
  $pagesOK['espace_membres'] = 'espace_membres.php';
  
   $pagesOK['modif_texte'] = 'modif_texte.php';
   
    $pagesOK['modif_texte_accueil'] = 'modif_texte_accueil.php';
	
	  $pagesOK['modif_texte_news'] = 'modif_texte_news.php';
	  
	   $pagesOK['modif_texte_contacts'] = 'modif_texte_contacts.php';
	   
	   $pagesOK['modif_texte_pied_de_page_categorie1'] = 'modif_texte_pied_de_page_categorie1.php';
	  
	   $pagesOK['modif_texte_pied de page_categorie3'] = 'modif_texte_pied de page_categorie3.php';
	   

	  
		 
//Page par defaut



//Si le $_GET['page'] est dans les keys du tableau $pagesOK

if(!empty($_GET['page'])

&& array_key_exists($_GET['page'], $pagesOK))

{

    //Remplace la valeur par defaut par celle de l'URL

    $page = $_GET['page'];
include($pagesOK[$page]); 

}

		else
		{
		$page = 'accueil_administration';
include('accueil_administration.php');
		}
		
	
		
		
		
		
   
  ?>
 


			    </div>
				<?php
				
				 include('include_admin/footer.php');
				?>
			</div>
		
		  <?php
		  	
		}
		else
		{
		echo"Vous n'avez pas l'autorisation d'accéderr à cette page !";
		}
		?>
		</body>
	
</html>

	