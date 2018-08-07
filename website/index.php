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
		    <h1>Poulpe@CATIE</h1>
		    <h2>Un site pour les gouverner tous</h2>
		</div>

		<div class="content">
		    <h2 class="content-subhead">Le poulpe, plus qu'un jeu</h2>
		    <p>
			La légende raconte qu'un soir de pleine lune, blablabla TODO
		    </p>


		    
		    <h2 class="content-subhead">Now Let's Speak Some Latin</h2>
		    <p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		    </p>

		    <div class="pure-g">
			<div class="pure-u-1-4">
			    <img class="pure-img-responsive" src="http://farm3.staticflickr.com/2875/9069037713_1752f5daeb.jpg" alt="Peyto Lake">
			</div>
			<div class="pure-u-1-4">
			    <img class="pure-img-responsive" src="http://farm3.staticflickr.com/2813/9069585985_80da8db54f.jpg" alt="Train">
			</div>
			<div class="pure-u-1-4">
			    <img class="pure-img-responsive" src="http://farm6.staticflickr.com/5456/9121446012_c1640e42d0.jpg" alt="T-Shirt Store">
			</div>
			<div class="pure-u-1-4">
			    <img class="pure-img-responsive" src="http://farm8.staticflickr.com/7357/9086701425_fda3024927.jpg" alt="Mountain">
			</div>
		    </div>

		    <h2 class="content-subhead">Try Resizing your Browser</h2>
		    <p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		    </p>
		</div>
	    </div>
	</div>




	<script src="js/ui.js"></script>

    </body>
</html>
