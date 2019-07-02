<?php
$query_listBillets=$dtb->query('SELECT * FROM billets INNER JOIN genre_billet ON billets.id_genre=genre_billet.id_genre WHERE login= "'.$_SESSION['login'].'"');
while($data_billets=$query_listBillets->fetch()){
	echo $data_billets['title']
	$data_billets['id_genre.nom']
	$data_billets['']
	$data_billets['']

}

?>