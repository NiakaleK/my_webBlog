<!DOCTYPE html>
<html lang="en">
<head>
	<title>Food'n Solites - Proposer un article</title>
	<?php require_once("portion/head.php"); ?>
</head>
<body>
    <?php require_once("sql/sql_connectDtb.php"); ?>
    <?php require_once("portion/header.php"); ?>
    <section>
    	<h2>Proposer un article</h2>

        <form class="billet" action="publier.php" method="POST">
       		<?php require_once("sql/sql_displayBilletsForm.php"); ?>
       	</form>
        
        <?php require_once("sql/sql_billetAttente.php"); ?>
   </section>
   
   <?php require_once("portion/footer.php"); ?>
</body>
</html>
