<?php
if (!empty($_POST['tags'])){ 
	$tags=$_POST['tags'];

	$query=$dtb->prepare('SELECT id_billet, title,content,liens,account.login AS "login",nom,tags,created FROM billets INNER JOIN genre_billet ON billets.id_genre=genre_billet.id_genre INNER JOIN account ON billets.id_user=account.id_user WHERE tags LIKE ?');

	// $query=$dtb->prepare('SELECT * FROM billets  WHERE tags LIKE :tags');
	$query->execute(array('%'. $tags.'%'));

	if($query->rowcount() >0){
		echo '<u>Résultats pour "' . $tags . '"</u> :)<br><br>';

		while($data=$query->fetch()){
			echo '<div class="post">
				<div>
					<p><a target="_blank" href="' . $data['liens'] . '"> >Lien</a></p>
				</div>
				<div>
					<h3>'.$data['title'] .'</h3>
					<h4>Tags: '.$data['tags'] .'</h4>
					<p>'.$data['content'] .'</p><hr>
					<p><strong>Commentaires</strong></p>';

				$query_listComm = $dtb->query('SELECT login, commentaire, posted FROM commentaires INNER JOIN billets ON billets.id_billet=commentaires.id_billet WHERE commentaires.id_billet=' . $data['id_billet']);

				if ($query_listComm->rowCount() > 0) {
					while($dataComm = $query_listComm->fetch()) {
						$login = ($dataComm['login'] == NULL) ? 'visiteur' : $dataComm['login'];

						echo '<p><u>' . $login . '</u> (' . $dataComm['posted'] . ') - ' . $dataComm['commentaire'] . '</p>';
					}
				}

				echo '<textarea cols="50" placeholder="Un commentaire..." class="commentaire"></textarea>
					<p class="publie">Publié le ' . $data['created'] . ' par ' . $data['login'] . '</p>
				</div>
			</div>';
		}
	}
	else echo 'Aucun résultat pour "' . $tags . '" :(';
}
?>