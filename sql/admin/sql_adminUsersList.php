<h3><u>Administrateurs</u></h3>
<br>

<?php
$query_listAdmin = $dtb->query('SELECT login, fiche_perso.* FROM account INNER JOIN fiche_perso ON account.id_user=fiche_perso.id_user WHERE id_type=1');
echo '<table class="table table-striped">
	<thead>
		<tr>
			<th>Date d\'inscription</th><th>Login</th><th>Nom</th><th>Prenom</th><th>Date de naissance</th><th>Adresse</th><th>Code postal</th><th>Ville</th>
		</tr>
	</thead>
	<tbody>';
while ($dataListAdmin = $query_listAdmin->fetch()) {
	echo '<tr>
		<td>' . $dataListAdmin['date_inscription'] . '</td><td>' . $dataListAdmin['login'] . '</td><td>' . $dataListAdmin['nom'] . '</td><td>' . $dataListAdmin['prenom'] . '</td><td>' . $dataListAdmin['date_naissance'] . '</td><td>' . $dataListAdmin['adresse'] . '</td><td>' . $dataListAdmin['cp'] . '</td><td>' . $dataListAdmin['ville'] . '</td>
	</tr>';
}
echo '</tbody>
</table>';

$query_listAdmin->closeCursor();
?>

<br><hr><br>
<h3><u>Bloggers</u></h3>
<br>

<?php
$query_listUsers = $dtb->query('SELECT login, fiche_perso.* FROM account INNER JOIN fiche_perso ON account.id_user=fiche_perso.id_user WHERE id_type=2');
echo '<table class="table table-striped">
	<thead>
		<tr>
			<th>Date d\'inscription</th><th>Login</th><th>Nom</th><th>Prenom</th><th>Date de naissance</th><th>Adresse</th><th>Code postal</th><th>Ville</th>
		</tr>
	</thead>
	<tbody>';
while ($dataListUsers = $query_listUsers->fetch()) {
	echo '<tr>
		<td>' . $dataListUsers['date_inscription'] . '</td><td>' . $dataListUsers['login'] . '</td><td>' . $dataListUsers['nom'] . '</td><td>' . $dataListUsers['prenom'] . '</td><td>' . $dataListUsers['date_naissance'] . '</td><td>' . $dataListUsers['adresse'] . '</td><td>' . $dataListUsers['cp'] . '</td><td>' . $dataListUsers['ville'] . '</td>
	</tr>';
}
echo '</tbody>
</table>';

$query_listUsers->closeCursor();
?>

<br><hr><br>
<h3><u>Membres</u></h3>
<br>

<?php
$query_listMember = $dtb->query('SELECT login, fiche_perso.* FROM account INNER JOIN fiche_perso ON account.id_user=fiche_perso.id_user WHERE id_type=3');
echo '<table class="table table-striped">
	<thead>
		<tr>
			<th>Date d\'inscription</th><th>Login</th><th>Nom</th><th>Prenom</th><th>Date de naissance</th><th>Adresse</th><th>Code postal</th><th>Ville</th>
		</tr>
	</thead>
	<tbody>';
while ($datalistMember = $query_listMember->fetch()) {
	echo '<tr>
		<td>' . $datalistMember['date_inscription'] . '</td><td>' . $datalistMember['login'] . '</td><td>' . $datalistMember['nom'] . '</td><td>' . $datalistMember['prenom'] . '</td><td>' . $datalistMember['date_naissance'] . '</td><td>' . $datalistMember['adresse'] . '</td><td>' . $datalistMember['cp'] . '</td><td>' . $datalistMember['ville'] . '</td>
	</tr>';
}
echo '</tbody>
</table>';

$query_listMember->closeCursor();
?>