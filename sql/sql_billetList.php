<?php
if(isset($_SESSION['login'])){
	$login=$_SESSION['login'];
	$query_listBillets=$dtb->query('SELECT * FROM billets INNER JOIN genre_billet ON billets.id_genre=genre_billet.id_genre WHERE login LIKE"'.$login.'"');
	echo '<table class="table table-striped">
	<thead>
		<tr>
			<th>Titre</th><th>Thème</th><th>Contenu</th><th>Date de publication</th><th>Modifier</th>
		</tr>
	</thead>
	<tbody>';

		while($data_billets=$query_listBillets->fetch()){
			echo '<tr><td>'. $data_billets['title'] .'</td><td>'.
			$data_billets['nom'] .'</td><td>'.
			$data_billets['content'] .'</td><td>'.
			$data_billets['created'] .'</td>
			<td><form action="modifierBillet.php" method ="post"><button class="btn btn-outline-success my-2 my-sm-0" value="'.$data_billets['id_billet'].'" name="modifier" type="submit"><a href="modifierBillet.php">Modifier</a></button></form></td></tr>';

		}
		echo '</tbody>
	</table>';
	$query_listBillets->closeCursor();

}


?>