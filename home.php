<!DOCTYPE html>
<html lang="en">
<head>
	<title>Food'n Solites - Accueil</title>
	<?php require_once("portion/head.php"); ?>
</head>
<body>
    <?php require_once("sql/sql_connectDtb.php"); ?>
    <?php require_once("portion/header.php"); ?>

    <section>          
        <?php require_once("sql/sql_homeLastArticles.php"); ?>
        <?php require_once("sql/sql_homeLastDecouvertes.php"); ?>
        <?php require_once("sql/sql_homeLastRecettes.php"); ?>

        <?php require_once("sql/sql_addComm.php"); ?>
    </section>
    
    <?php require_once("portion/footer.php"); ?>
</body>
</html>