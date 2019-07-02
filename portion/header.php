<header>
	<!-- slide -->
	<div class="bs-example">
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
	        <!-- Carousel indicators -->
	        <ol class="carousel-indicators">
	            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	            <li data-target="#myCarousel" data-slide-to="1"></li>
	            <li data-target="#myCarousel" data-slide-to="2"></li>
	            <li data-target="#myCarousel" data-slide-to="3"></li>
	            <li data-target="#myCarousel" data-slide-to="4"></li>
	        </ol>   
	        <!-- Wrapper for carousel items -->
	        <div class="carousel-inner">
	            <div class="item active">
	                <img src="images/slider/burger.jpg" alt="First Slide">
	            </div>
	            <div class="item">
	                <img src="images/slider/choco.jpg" alt="Second Slide">
	            </div>
	            <div class="item">
	                <img src="images/slider/bento.jpg" alt="Third Slide">
	            </div>
	            <div class="item">
	                <img src="images/slider/beefburger.jpg" alt="Fourth Slide">
	            </div>
	            <div class="item">
	                <img src="images/slider/dessert.jpg" alt="Fifth Slide">
	            </div>
	        </div>
	        <!-- Carousel controls -->
	        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-left"></span>
	        </a>
	        <a class="carousel-control right" href="#myCarousel" data-slide="next">
	            <span class="glyphicon glyphicon-chevron-right"></span>
	        </a>
	    </div>
	</div>

	<!-- menu -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<h1><a class="navbar-brand" href="home.php">Food'nSolites</a></h1>
			</div>

			<div class="nav navbar-nav navbar-right">
				<ul class="nav navbar-nav">
	    			<li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"></span></a></li>
	    			<li><a href="articles.php">ARTICLES</a></li>
	    			<li><a href="publier.php">PROPOSER UN ARTICLE</a></li>
	    			<li><a href="charts.php">CHARTES</a></li>
	    			<li><a href="contact.php">CONTACT</a></li>
	    			<?php require_once("sql/sql_displaySignLog.php"); ?>
				</ul>
			</div>
		</div>
	</nav>

</header>