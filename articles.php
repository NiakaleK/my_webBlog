<!DOCTYPE html>
<html lang="en">
<head>
	<title>Food'n Solites - Articles</title>
	<?php require_once("portion/head.php"); ?>
</head>
<body>
    <?php require_once("sql/sql_connectDtb.php"); ?>
    <?php require_once("portion/header.php"); ?>
    
    <section>
        <h2>Articles</h2>
        <form action="articles.php" method="post" class="navbar-form" role="search">
            <input type="text" name="tags" class="form-control" placeholder="Un tag...">
            <button type="submit" class="btn btn-default">Rechercher</button>
        </form>
        <br><br><br><br>
        <?php require_once("sql/sql_articlesTags.php"); ?>
    </section>

   <?php require_once("portion/footer.php"); ?>
</body>
</html>
