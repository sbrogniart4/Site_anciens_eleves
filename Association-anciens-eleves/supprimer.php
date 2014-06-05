<?php

$link = mysql_connect ('localhost','root','') or die ('Erreur : '.mysql_error() );

mysql_select_db('administration') or die ('Erreur :'.mysql_error());

$row["id"] = $_POST['id']

$delete = 'DELETE * FROM membre WHERE ID = $row["id"]';



$result = mysql_query($delete,$link) or die ('Erreur : '.mysql_error() );

$total = mysql_num_rows($result);



?>