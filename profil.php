<!DOCTYPE html>
<html lang="en">
<head>
	<title>Food'n Solites - Profil</title>
	<?php require_once("portion/head.php"); ?>
</head>
<body>
    <?php require_once("sql/sql_connectDtb.php"); ?>
	<?php require_once("portion/header.php"); ?>
	
	<section>
        <h2>Profil</h2>

		<div class="well">
		    <ul id="profil-menu" class="nav nav-tabs">
		    	<li class="active"><a href="#details" data-toggle="tab">Details</a></li>
		    	<li><a href="#upd" data-toggle="tab">Modification</a></li>
		    	<li><a href="#publications" data-toggle="tab">Publications</a></li>
		    </ul>

		    <?php require_once("sql/sql_profileData.php"); ?>

		    <div id="myTabContent" class="tab-content">

		    	<!-- details -->
		    	<div id="details" class="tab-pane active in">
		        	<?php require_once("sql/sql_profileDetails.php"); ?>
			    </div>

			    <!-- modification -->
			    <div id="upd" class="tab-pane fade">
			   		<form action="#upd" method="post" id="tab" class="form-signin">
			    		<?php require_once("sql/sql_profileForm.php"); ?>
			    	</form>

			    	<?php require_once("sql/sql_profileFormUpd.php"); ?>
			    </div>

			    <!-- publications -->
			    <div id="publications" class="tab-pane fade">
			    <?php require_once("sql/sql_billetList.php"); ?>
			    
			    	
			    </div>
			   

		  	</div>
		</div>

        <!--  -->
    </section>

    <?php require_once("portion/footer.php"); ?>
</body>
</html>
