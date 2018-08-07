<?php
include("db.php");

$players = getPlayers();

echo '<script src="js/jquery-2.1.4.min.js"></script>';
echo '<!-- Menu toggle -->';
echo '<a href="#menu" id="menuLink" class="menu-link">';
echo '<!-- Hamburger icon -->';
echo '<span></span>';
echo '</a>';

echo '<div id="menu">';
echo '    <div class="pure-menu">';
echo '	<!-- <a class="pure-menu-heading" href="index.php">Poulpe@CATIE</a> -->';
echo '	<ul class="pure-menu-list">';
echo '	    <li id="index" class="pure-menu-item"><a href="index.php" class="pure-menu-link">Poulpe@CATIE</a></li>';
echo '	    <li id="regles" class="pure-menu-item"><a href="regles.php" class="pure-menu-link">Règles</a></li>';
echo '	    <li id="scores" class="pure-menu-item"><a href="scores.php" class="pure-menu-link">Scores</a></li>';
echo '	    <li id="stats" class="pure-menu-item"><a href="stats.php" class="pure-menu-link">Stats</a></li>';
echo '<p style="margin-left:0.4em;color:#c35555">Classement</p>';

foreach($players as $p){
    echo '<li id="player'.$p[0].'" class="pure-menu-item"><a style="color:#ffffff" class="pure-menu-link">'.$p[1].' : '.$p[2].'</a></li>';
}

echo '	    <!-- <li class="pure-menu-item"><a href="#" class="pure-menu-link">Contact</a></li> -->';
echo '	</ul>';
echo '    </div>';
echo '</div>';

echo '<script>';
echo 'var pageName = location.pathname;';

echo 'pageName = pageName.split("/");';
echo 'pageName = pageName[2].split('.');';
echo 'pageName = pageName[0].toLowerCase();';
echo 'pageName = pageName.slice(0, -4);';
echo '$("#"+pageName).addClass("menu-item-divided pure-menu-selected");';
echo '</script>';

?>

