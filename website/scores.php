<!doctype html>
<html lang="en">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
	<title>Responsive Side Menu &ndash; Layout Examples &ndash; Pure</title>
	
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
        <link rel="stylesheet" href="css/layouts/side-menu.css">	
    </head>
    
    <body>
	<div id="layout">
	    
	    <?php include("menu.php"); ?>
	    
	    <div id="main">
		<div class="header">
		    <img class="pure-img-responsive-header" src="assets/poulpe.png" alt="Poulpe">
		    <h1>Les scores</h1>
		    <h2>---</h2>
		</div>

		<div class="content">

		</div>
	    </div>
	</div>

	<script src="js/ui.js"></script>

    </body>
</html>
