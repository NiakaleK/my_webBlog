<h2>Les utilisateurs récemment inscrits</h2>

<?php
$query_LastUsers = $dtb->query('SELECT login, fiche_perso.* FROM account INNER JOIN fiche_perso ON account.id_user=fiche_perso.id_user ORDER BY date_inscription DESC LIMIT 5');

echo '<table class="table table-striped">
	<thead>
		<tr>
			<th>Date d\'inscription</th><th>Login</th><th>Nom</th><th>Prenom</th><th>Date de naissance</th><th>Adresse</th><th>Code postal</th><th>Ville</th>
		</tr>
	</thead>
	<tbody>';
while ($dataLastUsers = $query_LastUsers->fetch()) {
	echo '<tr>
		<td>' . $dataLastUsers['date_inscription'] . '</td><td>' . $dataLastUsers['login'] . '</td><td>' . $dataLastUsers['nom'] . '</td><td>' . $dataLastUsers['prenom'] . '</td><td>' . $dataLastUsers['date_naissance'] . '</td><td>' . $dataLastUsers['adresse'] . '</td><td>' . $dataLastUsers['cp'] . '</td><td>' . $dataLastUsers['ville'] . '</td>
	</tr>';
}
echo '</tbody>
</table>';
?>

<br><hr><br>
<h2>Les derniers articles publiés</h2>
<br>

<?php
$query_lastArticles = $dtb->query('SELECT * FROM billets INNER JOIN genre_billet ON billets.id_genre=genre_billet.id_genre ORDER BY created DESC LIMIT 5');

echo '<table class="table table-striped">
	<thead>
		<tr>
			<th>Date de publication</th><th>Login</th><th>Titre</th><th>Theme</th><th>Contenu</th><th>Tags</th><th>Modifié</th>
		</tr>
	</thead>
	<tbody>';
while ($dataLastArticles = $query_lastArticles->fetch()) {
	echo '<tr>
		<td>' . $dataLastArticles['created'] . '</td><td>' . $dataLastArticles['login'] . '</td><td>' . $dataLastArticles['title'] . '</td><td>' . $dataLastArticles['nom'] . '</td><td>' . $dataLastArticles['content'] . '</td><td>' . $dataLastArticles['tags'] . '</td><td>' . $dataLastArticles['updated'] . '</td>
	</tr>';
}
echo '</tbody>
</table>';
?>


<br><hr><br>
<h2>Les derniers articles en attente</h2>
<br>

<?php
$query_lastArtWait = $dtb->query('SELECT * FROM billets_attente INNER JOIN genre_billet ON billets_attente.id_genre=genre_billet.id_genre ORDER BY created DESC LIMIT 5');

echo '<table class="table table-striped">
	<thead>
		<tr>
			<th>Date de proposition</th><th>Login</th><th>Titre</th><th>Theme</th><th>Contenu</th><th>Tags</th>
		</tr>
	</thead>
	<tbody>';
while ($dataLastArtWait = $query_lastArtWait->fetch()) {
	echo '<tr>
		<td>' . $dataLastArtWait['created'] . '</td><td>' . $dataLastArtWait['login'] . '</td><td>' . $dataLastArtWait['title'] . '</td><td>' . $dataLastArtWait['nom'] . '</td><td>' . $dataLastArtWait['content'] . '</td><td>' . $dataLastArtWait['tags'] . '</td>
	</tr>';
}
echo '</tbody>
</table>';
?>