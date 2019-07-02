<?php
if (isset($_POST['user']) && !empty($_POST['user'])) {
	$search = $_POST['user'];

	$query_searchUser = $dtb->prepare('SELECT account.*, nom FROM account INNER JOIN type ON account.id_type=type.id_type WHERE login LIKE :search');
	$query_searchUser->execute(array(':search' => '%'.$search.'%'));

	if ($query_searchUser->rowCount() > 0) {
		echo '<p><u>Resultat pour "' . $search . '"</u> :)</p>
		<hr>
		<table id="tableUsers" class="table table-striped">
			<thead>
				<tr>
					<th>Id</th><th>Type</th><th>Login</th><th></th>
				</tr>
			</thead>
			<tbody>';

		while ($dataList = $query_searchUser->fetch()) {
			$login = $dataList['login'];
			echo '<tr>
				<td>' . $dataList['id_user'] . '</td>
				<td>' . $dataList['nom'] . '</td>
				<td>' . $dataList['login'] . '</td>';
				
			if ($_SESSION['login'] != 'root') {
				if ($dataList['id_type'] != 1) {
					echo '<td><form action="usersDelete.php" method="post">
						<button type="submit" name="getId" value="' . $dataList['id_user'] . '">Supprimer</button>
					</form></td>';
				}
			}
			else {
				echo '<td><button>Supprimer</button></td>';
			}
			echo '</tr>';
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