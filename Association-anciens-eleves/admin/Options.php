<?php
$link = mysql_connect ('localhost','root','') or die ('Erreur : '.mysql_error() );

mysql_select_db('administration') or die ('Erreur :'.mysql_error());

$select = 'SELECT id,pseudo,pass FROM membre';



$result = mysql_query($select,$link) or die ('Erreur : '.mysql_error() );

$total = mysql_num_rows($result);







// si on a récupéré un résultat on l'affiche.

if($total) {

    // debut du tableau

    echo '<center><table border="0,5" bgcolor="#000080">'."\n";

        /* première ligne on affiche les titres */

        echo '<tr>';

        echo '<td bgcolor="#0000FF" align="center"><b><font size="2" color="#000000">ID</font></b></td>';

        echo '<td bgcolor="#0000FF" align="center"><b><font size="2" color="#000000">PSEUDO</font></b></td>';

        echo '<td bgcolor="#0000FF" align="center"><b><font size="2" color="#000000">PASS</font></b></td>';
		
		 echo '<td bgcolor="#0000FF" align="center"><b><font size="2" color="#000000">SUPPRIMER</font></b></td>';





                echo '</tr>'."\n";

    // lecture et affichage des résultats sur 3 colonnes, 1 résultat par ligne.

    while($row = mysql_fetch_array($result)) {

        echo '<tr>';

        echo '<td bgcolor="#FFFFFF"><font size="2">'.$row["id"].'</font></td>';

        echo '<td bgcolor="#FFFFFF"><font size="2">'.$row["pseudo"].'</font></td>';

        echo '<td bgcolor="#FFFFFF"><font size="2">'.$row["pass"].'</font></td>';

		echo '<td bgcolor="#FFFFFF"><font size="2"><a href="index.php?page=supprimer">Supprimer ligne</a></font></td>"';

                echo '</tr>'."\n";



    }

    echo '</table></center>'."\n";

    // fin du tableau.

}

else echo 'Pas d\'enregistrements dans cette table...';
?>