<?php
if(isset($_POST['modifier'])){
	$id_billet=$_POST['modifier'];

	$query_ModiifBillet=$dtb->query('SELECT * FROM billets INNER JOIN genre_billet ON billets.id_genre=genre_billet.id_genre WHERE id_billet LIKE "'.$id_billet.'" ');
	while ($data_modifier=$query_ModiifBillet->fetch()){
		echo '
		<form action="billetsModifier.php" method="post">

			<label>Titre</label></br>
			<textarea class="form-control" name="titre">'.$data_modifier['title'].'</textarea></br>
			<label>Contenu</label></br>
			<textarea class="form-control" name="contenu">'.$data_modifier['content'].'</textarea></br>
			<label>Tags</label></br>
			<textarea class="form-control" name="tags">'.$data_modifier['tags'].'</textarea></br>
			<label>Lien</label></br>
			<textarea class="form-control" name="liens">'.$data_modifier['liens'].'</textarea></br>
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="valider_modif" value="'.$data_modifier['id_billet'].'">Valider</button>
		</form>
		';
	}
	$query_ModiifBillet->closeCursor();

}
?>