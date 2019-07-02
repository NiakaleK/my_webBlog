<?php
if (isset($_POST['user']) && !empty($_POST['user'])) {
	$search = $_POST['user'];

	$query_searchUser = $dtb->prepare('SELECT date_inscription, account.id_user AS "id_user", type.nom AS "nom_type", account.login AS "login", fiche_perso.nom AS "nom", prenom, date_naissance, adresse, cp, ville FROM account INNER JOIN fiche_perso ON account.id_user=fiche_perso.id_user INNER JOIN type ON account.id_type=type.id_type WHERE fiche_perso.nom LIKE :search OR prenom LIKE :search OR account.login LIKE :search');
	$query_searchUser->execute(array(':search' => '%'.$search.'%'));

	if ($query_searchUser->rowCount() > 0) {
		echo '<p><u>Resultat pour "' . $search . '"</u> :)</p>
		<hr>
		<table id="tableUsers" class="table table-striped">
			<thead>
				<tr>
					<th>Date d\'inscription</th><th>Id</th><th>Type</th><th>Login</th><th>Nom</th><th>Prenom</th><th>Date de naissance</th><th>Adresse</th><th>Code postal</th><th>Ville</th><th></th>
				</tr>
			</thead>
			<tbody>';

		while ($dataList = $query_searchUser->fetch()) {
			echo '<tr>
				<td>' . $dataList['date_inscription'] . '</td>
				<td>' . $dataList['id_user'] . '</td>
				<td>' . $dataList['nom_type'] . '</td>
				<td>' . $dataList['login'] . '</td>';
				
			$ddn = ($dataList['date_naissance'] == "") ? "AAAA-MM-DD" : $dataList['date_naissance'];

			if ($_SESSION['login'] != "root") {
				if ($dataList['id_user'] != 1) {
		            echo '<form action="usersUpdate.php" method="post">
		                    <td class="userUpdate"><input type="text" name="nom" placeholder="' . $dataList['nom'] . '"></td>
		                    <td class="userUpdate"><input type="text" name="prenom" placeholder="' . $dataList['prenom'] . '"></td>
		                    <td class="userUpdate"><input type="text" name="ddn" placeholder="' . $ddn . '"></td>
		                    <td class="userUpdate"><input type="text" name="adresse" placeholder="' . $dataList['adresse'] . '"></td>
		                    <td class="userUpdate"><input type="text" name="cp" placeholder="' . $dataList['cp'] . '"></td>
		                    <td class="userUpdate"><input type="text" name="ville" placeholder="' . $dataList['ville'] . '"></td>
		                    <td class="userUpdate"><button type="submit" name="getId" value="' . $dataList['id_user'] . '">Modifier</button></td>
		            	</form>
		            </tr>';
		        }
		    }
		    else {
		    	echo '<form action="usersUpdate.php" method="post">
	                    <td class="userUpdate"><input type="text" name="nom" placeholder="' . $dataList['nom'] . '"></td>
	                    <td class="userUpdate"><input type="text" name="prenom" placeholder="' . $dataList['prenom'] . '"></td>
	                    <td class="userUpdate"><input type="text" name="ddn" placeholder="' . $ddn . '"></td>
	                    <td class="userUpdate"><input type="text" name="adresse" placeholder="' . $dataList['adresse'] . '"></td>
	                    <td class="userUpdate"><input type="text" name="cp" placeholder="' . $dataList['cp'] . '"></td>
	                    <td class="userUpdate"><input type="text" name="ville" placeholder="' . $dataList['ville'] . '"></td>
	                    <td class="userUpdate"><button type="submit" name="getId" value="' . $dataList['id_user'] . '">Modifier</button></td>
	            	</form>
	            </tr>';
		    }
		}
		echo '</tbody>
		</table>';

	}
	else {
		echo '<p>Pas de resultat pour "' . $search . '" :(</p>';
	}

	$query_searchUser->closeCursor();
}
?>