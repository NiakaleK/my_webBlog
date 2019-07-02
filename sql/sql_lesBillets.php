<?php
$query_listBillets=$dtb->query('SELECT * FROM billets INNER JOIN genre_billet ON billets.id_genre=genre_billet.id_genre');
 echo '<table class="table table-striped">
	<thead>
		<tr>
			<th>Titre</th><th>Thème</th><th>Auteur</th><th>Contenu</th><th>Date de publication</th>
		</tr>
	</thead>
	<tbody>';

while($data_billets=$query_listBillets->fetch()){
	echo '<tr><td>'. $data_billets['title'] .'</td><td>'.
	$data_billets['nom'] .'</td><td>'.
	$data_billets['login'] .'</td><td>'.
	$data_billets['content'] .'</td><td>'.
	$data_billets['created'] .'</td></tr>';
	// $data_billets['']

}
echo '</tbody>
</table>';

?>