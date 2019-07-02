<?php
if (isset($_POST['Titre']) && isset($_POST['theme']) && isset($_POST['contenu']) && isset($_POST['liens_type']) && isset($_SESSION['login']) && isset($_POST['tags'])) {

	$query_id=$dtb->query('SELECT id_user FROM account WHERE login="'.$_SESSION['login'].'"');

	$data = $query_id->fetch();
	$id = $data['id_user'];
	$query_id->closeCursor();

	$query_billets=$dtb->prepare('INSERT INTO billets (id_user, title, id_genre, login, content, liens, liens_type, tags, created) VALUES (:id, :titre, :theme, :auteur, :contenu, :liens, :liens_type, :tags, NOW())');
	$query_billets->execute(array(
	'id'=>$id,
	'titre'=>$_POST['Titre'],
	'theme'=>$_POST['theme'],
	'auteur'=>$_SESSION['login'],
	'contenu'=>$_POST['contenu'],
	'liens'=>$_POST['liens'],
	'liens_type'=>$_POST['liens_type'],
	'tags'=>$_POST['tags']
	));

	echo 'L\'article "' . $_POST['Titre'] . '" a bien été ajouté ! :)';

	$query_billets->closeCursor();
	$query_id->closeCursor();
}
?>