     <?php
    /* il faut demarrer la session*/
 
     
	 
	 	$pass=$_POST['pass'] ;
		$pseudo=$_POST['pseudo'];
		
	 

	 
    if (empty($_SESSION['id'])) //les membres connecte ne peuvent pas s'inscrire
    {
    /* il faut que toutes les variables du formulaires existent*/
    if(isset($_POST['pseudo']) && isset($_POST['pass']))
    {
    
    /*connexion a la BDD*/
    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membres', 'root', '');
    }
    catch (Exception $e)
    {
    die('Erreur : ' . $e->getMessage());
    }
     
    /*on crypte le mot de passe pour faire le test*/
    $passhache = sha1($_POST['pass']);
     
    /* on verifie qu'un membre a bien ce pseudo et ce mot de passe*/
   $pseudo=$_POST['pseudo'];
	$passhache=$_POST['pass'];
      $req = $bdd->prepare("SELECT * FROM membres WHERE pseudo = :pseudo");
	   $req->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
        $req->execute();
    $resultat=$req->fetch();
     
    /*si il n'y a pas de resultats, on renvoie a la page de connexion*/
		if(!$resultat)
		{
			header('Location: index.php?page=login');
			
		}
		else
		{
			/* on demarre la session */
		session_start();
     
		/* on cree les variables de session du membre qui lui serviront pendant sa session*/
		$_SESSION['id']= $resultat['id'];
		$_SESSION['pseudo']= $pseudo;
		$_SESSION['mail']= $resultat['email'];
     
		/*on renvoie sur la page d'accueil*/
		header('Location: index.php');
		}
    }
    else
    {
    echo "Il faut remplir tous les champs";
    }
    }
   
    
    else
    {
    echo "Vous n'avez pas le droit d'acceder a cette page";
    }
    ?>