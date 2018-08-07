<?php

$GLOBALS['local'] = false;

if($GLOBALS['local']){
    $GLOBALS['db'] = new PDO(
	'mysql:host=localhost;dbname=tutorat',//Host and database name
	'root',//Username
	''//Password
    );
}
else{
    $GLOBALS['db'] = new PDO(
	'mysql:host=pirronefkcdb.mysql.db;dbname=pirronefkcdb',//Host and database name
	'pirronefkcdb',//Username
	'Zigmartoula1'//Password
    );
}









?>
