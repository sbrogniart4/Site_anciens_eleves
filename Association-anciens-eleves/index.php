<!doctype html>
<html lang="fr">
	<head>
		
	
		
	<meta charset="utf-8">
	
	
			<?php
			include('include/style_CSS.php');
			session_start();
			
			
				?>
	
		<title>
		Association des anciens &eacutel&eacuteves du Lyc&eacutee Raymond Poincar&eacute de Bar-Le-Duc
		</title>
	</head>
	<body>
		
			<?php
			
			include('include/header.php');
			
			
			?>
			
			
			
			<?php
			include('include/menu.php');
				?>
				
				
	
	
	
				<div id="contenu">
				
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
 
  $pagesOK['fiche_recapitulative'] = 'fiche_recapitulative.php';
  
  $pagesOK['Page_adherer2'] = 'Page_adherer2.php';
  
   $pagesOK['piedpage_categorie1'] = 'piedpage_categorie1.php';
	   
		
	$pagesOK['piedpage_categorie3'] = 'piedpage_categorie3.php';
		 
	$pagesOK['Choix-actions'] = 'Choix-actions.php';
		 
	$pagesOK['Choix-publications'] = 'Choix-publications.php';
	
	
		 
	$pagesOK['Index-Bulletins'] = 'Index-Bulletins.php';
		 
	$pagesOK['Index-Photos'] = 'Index-Photos.php';
	
	
		 
		 

//Page par defaut

$page = 'accueil';

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
		$page = 'accueil';
include('accueil.php');
		}
		
		
		
		
		
		
		
   
  ?>
 


			    </div>
				
				<?php
		  include('include/footer.php');
		  ?>
		  
		  
		  
		</body>
	
</html>

	