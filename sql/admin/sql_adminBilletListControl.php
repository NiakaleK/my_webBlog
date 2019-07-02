<?php
if(isset($_SESSION['login'])){
	$login=$_SESSION['login'];
	$query_lastArtWait = $dtb->query('SELECT * FROM billets_attente INNER JOIN genre_billet ON billets_attente.id_genre=genre_billet.id_genre');

	echo '<table class="table table-striped">
	<thead>
		<tr>
			<th>Date de proposition</th><th>Login</th><th>Titre</th><th>Theme</th><th>Contenu</th><th>Tags</th><th>Valider</th>
		</tr>
	</thead>
	<tbody>';
		while ($dataLastArtWait = $query_lastArtWait->fetch()) {
			echo '<tr>
			<td>' . $dataLastArtWait['created'] . '</td><td>' . $dataLastArtWait['login'] . '</td><td>' . $dataLastArtWait['title'] . '</td><td>' . $dataLastArtWait['nom'] . '</td><td>' . $dataLastArtWait['content'] . '</td><td>' . $dataLastArtWait['tags'] . '</td><td><form action="billetsAttente.php" method ="post"><button class="btn btn-outline-success my-2 my-sm-0" value="'.$dataLastArtWait['id_billet'].'" name="publier" type="submit">Valider</button></form></td>
			</tr>';
	}
}
echo '</tbody>
</table>';

?>