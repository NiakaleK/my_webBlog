<?php
echo '<table id="profil-details">
	<tr>
		<td>Nom</td>
		<td>' . $dataGet['nom'] . '</td>
	</tr>
	<tr>
		<td>Prenom</td>
		<td>' . $dataGet['prenom'] . '</td>
	</tr>
	<tr>
		<td>Type</td>
		<td>' . $dataGet['type'] . '</td>
	</tr>
	<tr>
		<td>Date de naissance</td>
		<td>' . $dataGet['date_naissance'] . '</td>
	</tr>
	<tr>
		<td>Adresse</td>
		<td>' . $dataGet['adresse'] . '</td>
	</tr>
	<tr>
		<td>Code postal</td>
		<td>' . $dataGet['cp'] . '</td>
	</tr>
	<tr>
		<td>Ville</td>
		<td>' . $dataGet['ville'] . '</td>
	</tr>
</table>'
?>