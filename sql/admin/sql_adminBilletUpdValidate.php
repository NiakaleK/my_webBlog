<?php
if(isset($_POST['valider_modif'])){
	$id_billet=$_POST['valider_modif'];
	$titre=$_POST['titre'];
	$contenu=$_POST['contenu'];
	$tags=$_POST['tags'];
	$liens=$_POST['liens'];


$query_upBillet=$dtb->prepare('UPDATE billets SET title=?, content=?, tags=?, liens=?, updated=NOW() WHERE id_billet='.$id_billet);
	$query_upBillet->execute(array($titre, $contenu, $tags, $liens));
	echo "Article modifié! :) ";
	$query_upBillet->closeCursor();
}
?>