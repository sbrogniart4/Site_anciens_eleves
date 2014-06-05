<?php 
	
	if (empty($_SESSION['id']))
	{
	
?>
<div id="menu">
					
                             <ul class="wrap">
                                <li><a href='#'> Accueil-Contact </a>
                                    <ul>
                                        <li><a href='index.php?page=accueil'> Page générale </a>
										<li><a href='index.php?page=association'> Association </a>
                                    </ul>
                                <li><a href='#'> Outils administrateur </a>
                                    <ul>
                                        <li><a href='#'> Prix du Lycée </a>
                                        <li><a href='index.php?page=Metier'> Forum des métiers </a>
										<li><a href='#'> Autres </a>
                                    </ul>
                                
                             
									
								
										
                                    </ul>
							
							
			
					
				</div>
				<?php
				}
		?>