<?php

$GLOBALS['local'] = true;

if($GLOBALS['local']){
    $GLOBALS['db'] = new PDO(
	'mysql:host=localhost;dbname=poulpe',//Host and database name
	'root',//Username
	'Pl@stik.34'//Password
    );
}
else{
    $GLOBALS['db'] = new PDO(
	'mysql:host=;dbname=',//Host and database name
	'',//Username
	''//Password
    );
}


function getNbPlayers(){
    $str = "SELECT count(*) FROM players";
    $req = $GLOBALS['db']->prepare($str);
    $req->execute();
    $result = $req->fetchAll();
    return $result[0][0];    
}

function getPlayers(){
    $str = "SELECT * FROM players ORDER BY score DESC";
    $req = $GLOBALS['db']->prepare($str);
    $req->execute();
    $result = $req->fetchAll();
    return $result;    
}


/* function getSalt($name){
 *     $str = "SELECT salt FROM Tuteurs where name = :name ";
 *     $req = $GLOBALS['db']->prepare($str);
 *     $req->execute( array( 'name' => $name));
 *     $result = $req->fetchAll();
 *     return $result[0][0];
 * }*/









?>
